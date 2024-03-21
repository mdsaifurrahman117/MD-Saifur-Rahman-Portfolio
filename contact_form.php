<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="shortcut icon" href="assets/Favicon.png" type="image/x-icon">
          <!-- Font-awesome, Bootstrap and Custom stylesheet -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"/>
          <link rel="stylesheet" href="style.css">
          <title>Messages</title>
</head>
<body>

<div class="container">

<?php
// Database configuration
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'contact_form';

// Create a database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert data into the database
$sql = "INSERT INTO `contacts` (`Name`, `Email`, `Messages`, `Time`) VALUES ('$name', '$email', '$message', current_timestamp());";

if ($conn->query($sql) === TRUE) {
    echo '<div class="alert alert-success text-black text-center mt-5" role="alert"> Thank you for your message. I will reach you as soon as possible </div>';
} else {
    echo ' <div class="alert alert-warning text-black mt-5" role="alert">We are facing some technical problem. Please try again later</div> ' . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

</div>

          <!-- Bootstrap, jQuery and Custom Script -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" ></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
          <script src="script.js"></script>
</body>
</html>