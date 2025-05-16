<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
<?php include './admin/codes/db.php'; ?>

<!--===== HERO AREA STARTS =======-->
<div class="hero-inner-section-area-sidebar">
    <img alt="housebox" class="hero-img1" src="img/banner123.jpg" />
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-header-area text-center">
                    <a href="index.html">Home <svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path>
                        </svg> Puja Details</a>
                    <div class="space24"></div>
                    <h1>Puja Details</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== PUJA DETAILS AREA STARTS =======-->
<div class="puja-details-section-area sp1">
    <div class="container">
        <div class="row align-items-center">
            <?php
            $product_url = isset($_GET['url']) ? $_GET['url'] : '';

            if ($product_url) {
                $stmt = $db->prepare("SELECT p.*, b.name AS brand_name FROM products p LEFT JOIN brands b ON p.brand = b.id WHERE p.url = ? AND p.status = 'active'");
                $stmt->bind_param("s", $product_url);
                $stmt->execute();
                $result = $stmt->get_result();
                $product = $result->fetch_assoc();
                $stmt->close();

                if ($product) {
                    // Fetch gallery images from gallery_images table
                    $gallery_stmt = $db->prepare("SELECT image_url FROM gallery_images WHERE product_id = ?");
                    $gallery_stmt->bind_param("i", $product['id']); // Use $product['id'] instead of undefined $product_id
                    $gallery_stmt->execute();
                    $gallery_result = $gallery_stmt->get_result();
                    $gallery_images = [];

                    while ($row = $gallery_result->fetch_assoc()) {
                        $gallery_images[] = $row['image_url'];
                    }
                    $gallery_stmt->close();

                    // Safely decode services (avoid passing null to json_decode)
                    $services = !empty($product['services']) ? json_decode($product['services'], true) : [];
                    $created_at = new DateTime($product['created_at']);
                    ?>
                    
                    <!-- Left Side: Image Gallery -->
                    <div class="col-lg-6">
                        <div class="img2-carousel owl-carousel owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <!-- Main Image -->
                                    <div class="owl-item">
                                        <div class="img1">
                                            <img alt="<?php echo htmlspecialchars($product['title']); ?>" 
                                                 src="./admin/codes/<?php echo htmlspecialchars($product['main_image']); ?>" />
                                        </div>
                                    </div>
                                    
                                    <!-- Additional Gallery Images -->
                                    <?php if (!empty($gallery_images)) {
                                        foreach ($gallery_images as $image) { ?>
                                            <div class="owl-item">
                                                <div class="img1">
                                                    <img alt="Gallery Image" 
                                                         src="./admin/codes/<?php echo htmlspecialchars($image); ?>" />
                                                </div>
                                            </div>
                                    <?php } } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side: Text Details -->
                    <div class="col-lg-6">
    <div class="puja-details-content-box">
        <div class="puja-details-content">
            <h2><?php echo htmlspecialchars($product['title']); ?></h2>
            <div class="space16"></div>
            <div class="puja-meta">
                <p><strong>Category:</strong> <?php echo htmlspecialchars($product['brand_name']); ?></p>
                <p><strong>Added On:</strong> <?php echo $created_at->format('d F Y'); ?></p>
            </div>
            <div class="space24"></div>
            <h3>Description</h3>
            <p><?php echo html_entity_decode($product['long_description'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></p>
            
            <!-- Pricing & Booking -->
            <h3>Pricing & Booking</h3>
            <ul class="puja-services">
                <?php if (!empty($services['price_without_samagri'])) { ?>
                    <li><strong>Price (Without Pooja Samagri):</strong> <?php echo htmlspecialchars($services['price_without_samagri']); ?></li>
                <?php } ?>
                <?php if (!empty($services['price_with_samagri'])) { ?>
                    <li><strong>Price (With Pooja Samagri):</strong> <?php echo htmlspecialchars($services['price_with_samagri']); ?></li>
                <?php } ?>
                <li class="theme-btn3"><strong>Book Now:</strong> <a href="contact-us.php" target="_blank">Click Here</a></li>
            </ul>
        </div>
    </div>
</div>

<style>
/* Background for the Section */
.puja-details-section-area {
    padding: 60px 0;
    background: linear-gradient(135deg, #f7e8d4 0%, #fff3e6 100%); /* Subtle gradient */
    /* Optional: Use an image - uncomment and adjust path */
    /* background: url('img/puja-bg.jpg') no-repeat center center/cover; */
}

/* Boxed Container with Shadows */
.puja-details-content-box {
    background: #ffffff; /* White box */
    border-radius: 15px; /* Rounded corners */
    padding: 30px; /* Inner padding */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1), /* Main drop shadow */
                0 6px 6px rgba(0, 0, 0, 0.05); /* Subtle bottom shadow */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Hover animation */
}

.puja-details-content-box:hover {
    transform: translateY(-5px); /* Lift effect */
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15), /* Enhanced shadow on hover */
                0 8px 12px rgba(0, 0, 0, 0.08);
}

/* Content Styling */
.puja-details-content h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: #333;
}

.puja-details-content h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
    color: #555;
}

.puja-meta p {
    font-size: 1rem;
    margin-bottom: 10px;
    color: #666;
}

.puja-details-content p {
    font-size: 1rem;
    line-height: 1.6;
    color: #444;
}

.puja-services {
    list-style: none;
    padding: 0;
}

.puja-services li {
    margin-bottom: 15px;
    font-size: 1rem;
    color: #333;
}

.puja-services li strong {
    color: #222;
}

/* Button Styling */



/* Spacing Classes */
.space16 { height: 16px; }
.space24 { height: 24px; }
</style>

                <?php } else {
                    echo '<div class="col-lg-12"><p>Puja not found or inactive.</p></div>';
                }
            } else {
                echo '<div class="col-lg-12"><p>Please select a puja.</p></div>';
            }
            $db->close();
            ?>
        </div>
    </div>
</div>
<!--===== PUJA DETAILS AREA ENDS =======-->

<?php include 'footer.php'; ?>

<style>
.puja-details-section-area {
    padding: 60px 0;
}
.puja-details-content h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}
.puja-details-content h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
}
.puja-meta p {
    font-size: 1rem;
    margin-bottom: 10px;
}
.puja-services {
    list-style: none;
    padding: 0;
}
.puja-services li {
    margin-bottom: 10px;
}
.property-details-slider {
    max-width: 100%;
}
.property-details-slider .img1 img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}
.owl-nav button {
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: #333;
}
.owl-nav button:hover {
    color: #007bff;
}
.img1 {
    height: 33rem;
}
.img1 img {
    object-fit: cover;
    border-radius: 8px;
}
</style>

<script>
$(document).ready(function(){
    $('.img2-carousel').owlCarousel({ // Updated class name to match HTML
        items: 1,              // Show only 1 image at a time
        loop: true,            // Enable looping
        nav: true,             // Show navigation arrows
        dots: true,            // Show pagination dots
        autoplay: false,       // Disable autoplay (optional)
        margin: 10             // Space between items (optional)
    });
});
</script>