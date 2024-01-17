<!DOCTYPE html>
<html lang="en">

<?php
session_start();


$userRole = '';
// Check if the user is logged in and the user role is set
if (isset($_SESSION['email']) || isset($_SESSION['userRole'])) {
   // $userEmail = $_SESSION['email'];
   $userRole = $_SESSION['userRole'];
}




// Access user information
// Access other user information if needed
?>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
   <!-- Include Bootstrap JavaScript from CDN -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-dZkCJqOvKO1e1/LFpzOWPHlX6uoij4wCkZBlf5r+ZrsH7t8U5QKhAJA2Phb02DZ" crossorigin="anonymous"></script>

   <title>XML Project</title>

</head>

<body class="container">
   <?php include('../includes/header.php'); ?>
   <?php
   if (!isset($_SESSION['email']) || !isset($_SESSION['userRole'])) {
      // header("Location: /LP-XML-PROJECT/public/");
   }
   ?>


   <?php include('../src/index.php'); ?>


   





   <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="../assets/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>