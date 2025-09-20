<!DOCTYPE html>
<html>
<head>
    <title>Apply as Driver - SpeedX Delivery</title>
    <link rel="stylesheet" href="assets/style.css">

</head>
<body>
<header>
    <h1>🚚 Driver Application Form - SpeedX Delivery</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="apply.php">Apply Now</a>
    <a href="contact.php">Contact</a>
</nav>

<div class="container">
    <h2>Submit Your Application</h2>
    <form method="post" action="save_application.php">
        <label>Full Name:</label>
        <input type="text" name="name" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Phone Number:</label>
        <input type="text" name="phone" required>

        <label>License Number:</label>
        <input type="text" name="license_number" required>

        <label>Vehicle Type:</label>
        <select name="vehicle_type" required>
            <option value="Bike">Bike</option>
            <option value="Car">Car</option>
            <option value="Van">Van</option>
            <option value="Truck">Truck</option>
        </select>

        <label>Driving Experience (in years):</label>
        <input type="number" name="experience" min="0" max="50" required>

        <label>Preferred Shift:</label>
        <select name="shift">
            <option value="Morning">Morning</option>
            <option value="Evening">Evening</option>
            <option value="Night">Night</option>
        </select>

        <label>Message:</label>
        <textarea name="message" rows="4"></textarea>

        <button type="submit">Submit Application</button>
    </form>
</div>
</body>
</html>
