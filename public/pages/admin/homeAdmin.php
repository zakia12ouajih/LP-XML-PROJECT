<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

   <title>Document</title>
</head>
<?php

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
   header("Location: /LP-XML-PROJECT/public/login");
   exit();
}

// Get the user role from the session
$userRole = $_SESSION['userRole'];

// Include the header based on the user role
include_once($_SERVER['DOCUMENT_ROOT'] . "/LP-XML-PROJECT/includes/header.php");

// Rest of your homeadmin.php content here
?>


<body>
   <h1>hello admin</h1>
   <?php echo $userRole;?>
</body>

</html>