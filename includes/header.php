<!DOCTYPE html>
<html lang="en">

<?php
session_start();

      $userEmail = '';
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
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
   <!-- Include Bootstrap JavaScript from CDN -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
         <?php
         if (isset($_SESSION['email']) || isset($_SESSION['userRole'])) {
         // $userEmail = $_SESSION['email'];
         echo '<img src="../../public/images/EST-Safi-listes-des-admis-DUT-2018-removebg-preview1.png" class="mx-3" alt="gi" width="80">';
      
         }else{
            echo '<img src="../public/images/EST-Safi-listes-des-admis-DUT-2018-removebg-preview1.png" class="mx-3" alt="gi" width="80">';         }
         ?>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>

      <?php if ($userRole == 'admin') : ?>
         <div>Welcome Admin!</div>
      <?php elseif ($userRole == 'directeur-generale') : ?>
         <div>Welcome Director General!</div>
      <?php else : ?>
         <!-- Add more cases for other roles -->
      <?php endif; ?>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
               <a class="nav-link" href="/LP-XML-PROJECT/public/home">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/LP-XML-PROJECT/public/xmlData">xml data</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Connexion
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/LP-XML-PROJECT/public/login">Login</a>
                  <!-- <a class="dropdown-item" href="/LP-XML-PROJECT/public/register">Register</a> -->
                  <a class="dropdown-item" href="/LP-XML-PROJECT/public/logout">LogOut</a>
               </div>
            </li>

         </ul>
      </div>
   </nav>

</body>

</html>