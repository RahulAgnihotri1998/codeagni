<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php'; // Load Composer's autoloader

header("Content-Type: application/json");

// Sanitize input data
function sanitize($input)
{
    return htmlspecialchars(strip_tags(trim($input)));
}

// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit;
}

// Validate input data from $_POST
$name = isset($_POST['name']) ? sanitize($_POST['name']) : '';
$email = isset($_POST['email']) ? sanitize($_POST['email']) : '';
$phone = isset($_POST['phone']) ? sanitize($_POST['phone']) : '';
$plan = isset($_POST['plan']) ? sanitize($_POST['plan']) : '';
$message = isset($_POST['message']) ? sanitize($_POST['message']) : '';

// Validate required fields
if (empty($name) || empty($email) || empty($phone) || empty($plan) || empty($message)) {
    echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
    exit;
}

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid email format.']);
    exit;
}

// Validate phone number (10-15 digits)
if (!preg_match('/^\d{10,15}$/', $phone)) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid phone number. It should contain 10-15 digits.']);
    exit;
}

// Validate plan selection
$validPlans = ['Basic', 'Standard', 'Premium'];
if (!in_array($plan, $validPlans)) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid plan selection.']);
    exit;
}

// Initialize PHPMailer
$mail = new PHPMailer(true);

try {
    // Configure PHPMailer
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username   = 'shivamsingh19989@gmail.com';  // Your email
    $mail->Password   = 'lckt mzhu pmvz ieze';         // Your email app password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->setFrom('info@codeagni.com', 'Code-Agni'); // Replace with your email

    // Send email to admin
    $mail->addAddress('shivamsingh19989@gmail.com', 'Admin'); // Replace with the admin's email

    // Email content for Admin
    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Submission from ' . $name;
    $mail->Body = "
        <html>
            <body>
                <h3>New Contact Form Submission</h3>
                <p><strong>Name:</strong> {$name}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Phone:</strong> {$phone}</p>
                <p><strong>Selected Plan:</strong> {$plan}</p>
                <p><strong>Message:</strong><br>" . nl2br($message) . "</p>
            </body>
        </html>";
    $mail->AltBody = "New Contact Form Submission\nName: {$name}\nEmail: {$email}\nPhone: {$phone}\nPlan: {$plan}\nMessage: {$message}";

    // Send email to admin
    $mail->send();

    // Send an auto-response email to the user
    $mail->clearAddresses();
    $mail->addAddress($email, $name); // Send response to the user

    // Auto-response email content
    $mail->Subject = 'Thank You for Contacting Us';
    $mail->Body = "
        <html>
            <body>
                <h3>Thank you for contacting Code-Agni!</h3>
                <p>Dear {$name},</p>
                <p>Thank you for reaching out to us regarding the <strong>{$plan}</strong> plan. We have received your message and will get back to you as soon as possible.</p>
                <p><strong>Your Message:</strong><br>" . nl2br($message) . "</p>
                <p>We will contact you shortly at the phone number you provided.</p>
                <p>Best regards,<br>Code-Agni Team</p>
            </body>
        </html>";
    $mail->AltBody = "Thank you for contacting Code-Agni!\n\nDear {$name},\n\nWe have received your message regarding the {$plan} plan and will get back to you soon.\n\nYour Message:\n{$message}\n\nBest regards,\nCode-Agni Team";

    // Send the auto-response email
    $mail->send();

    // Return success response
    echo json_encode(['status' => 'success', 'message' => 'Your message has been sent successfully!']);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => 'Mailer Error: ' . $mail->ErrorInfo]);
}
?>
