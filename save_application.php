<?php
include 'db.php';
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $license  = $_POST['license_number'];
    $vehicle  = $_POST['vehicle_type'];
    $experience = $_POST['experience'];
    $shift    = $_POST['shift'];
    $message  = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO applications (name, email, phone, license_number, vehicle_type, experience, shift, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssis", $name, $email, $phone, $license, $vehicle, $experience, $shift, $message);

    if ($stmt->execute()) {
        $success = true;
    } 
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Application Status - SpeedX Delivery</title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 80px auto;
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0px 5px 20px rgba(0,0,0,0.2);
        }
        h1 {
            font-size: 48px;
            color: #28a745;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        a.button {
            text-decoration: none;
            background: #1e3c72;
            color: white;
            padding: 12px 30px;
            border-radius: 6px;
            font-size: 18px;
        }
        a.button:hover {
            background: #16325c;
        }
        .error h1 {
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if($success): ?>
            <h1>✅ Application Submitted!</h1>
            <p>Thank you, <b><?= htmlspecialchars($name) ?></b>! Your application has been received. We will contact you soon.</p>
            <a class="button" href="index.php">Back to Home</a>
        <?php else: ?>
            <div class="error">
                <h1>❌ Submission Failed!</h1>
                <p>Sorry, there was an error while submitting your application. Please try again.</p>
                <a class="button" href="apply.php">Back to Form</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
