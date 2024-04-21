<?php
include("config.php");

// Check if the user is logged in and Fullname session variable is set
if (isset($_SESSION['Name'])) {
    $Fullname = $_SESSION['Name'];
    $Address = $_SESSION['Address'];
} else {
    // If Fullname is not set, display a default greeting
    $Fullname = "Guest";
    $Address = "Unknown";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Homepage</title>
</head>
<body>
    <div class="right-links">
        <a href="logout.php"> <button class="btn">Log out</button></a> <!-- Logout link/button -->
    </div>

    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <?php
                    // Display the Fullname and Address
                    echo "<p>Hello " . $Fullname . "</p>";
                    echo "<p>Your Address: " . $Address . "</p>";
                    ?>
                </div>
            </div>
</div>
    </main>
</body>
</html>







