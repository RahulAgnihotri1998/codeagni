import os
import re
from PIL import Image
from bs4 import BeautifulSoup

# Define input and output files
INPUT_HTML = "./about-us.php"  # Change this to your PHP/HTML file
OUTPUT_HTML = "about.html"

# Ensure output directory exists
os.makedirs("optimized_images", exist_ok=True)

def convert_to_webp(img_path):
    try:
        img = Image.open(img_path)
        webp_path = os.path.join("optimized_images", os.path.basename(img_path).rsplit('.', 1)[0] + ".webp")
        img.save(webp_path, "WEBP", quality=80)
        print(f"Converted: {img_path} -> {webp_path}")
        return webp_path
    except Exception as e:
        print(f"Error converting {img_path}: {e}")
        return None

def optimize_images_in_html():
    with open(INPUT_HTML, "r", encoding="utf-8") as file:
        soup = BeautifulSoup(file, "html.parser")

    # Find all image tags
    for img_tag in soup.find_all("img"):
        src = img_tag.get("src")
        if src and any(ext in src for ext in [".jpg", ".jpeg", ".png"]):
            img_path = os.path.abspath(src)  # Get absolute path
            if os.path.exists(img_path):
                webp_path = convert_to_webp(img_path)
                if webp_path:
                    img_tag["src"] = webp_path

    # Save optimized HTML
    with open(OUTPUT_HTML, "w", encoding="utf-8") as file:
        file.write(str(soup))

    print(f"Optimized HTML saved as {OUTPUT_HTML}")

if __name__ == "__main__":
    optimize_images_in_html()
