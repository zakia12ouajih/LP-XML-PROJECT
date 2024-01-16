<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
   <!-- Include Bootstrap JavaScript from CDN -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</head>

<body>
   <nav class="navbar navbar-expand-md navbar-light bg-light">
      <a class="navbar-brand" href="#">
         <?php
         if (isset($_SESSION['email']) || isset($_SESSION['userRole'])) {
            echo '<img src="../../public/images/EST-Safi-listes-des-admis-DUT-2018-removebg-preview1.png" class="mx-3" alt="gi" width="80">';
         } else {
            echo '<img src="../public/images/EST-Safi-listes-des-admis-DUT-2018-removebg-preview1.png" class="mx-3" alt="gi" width="80">';
         }
         ?>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
               <a class="nav-link" href="/LP-XML-PROJECT/public/home">Home</a>
            </li>
            <li class="nav-item active">
               <?php if ($userRole == 'admin') : ?>
               <a class="nav-link" href="/LP-XML-PROJECT/public/admin/homeAdmin/administration">Administration</a>
               <?php endif;?>
            </li>
         </ul>

         <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php if ($userRole == 'admin') : ?>
                     Admin
                  <?php elseif ($userRole == 'directeur-generale') : ?>
                     Director General
                  <?php elseif ($userRole == 'condidat') : ?>
                     condidat
                  <?php elseif(!isset($_SESSION['email']) || !isset($_SESSION['userRole'])):?>
                     Connexion
                  <?php else : ?>
                     <!-- Add more cases for other roles -->
                  <?php endif; ?>
               </a>

               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php
                  if (!isset($_SESSION['email']) || !isset($_SESSION['userRole'])) {
                     echo '<a class="dropdown-item" href="/LP-XML-PROJECT/public/login">Login</a>';
                  }
                  ?>
                  <?php
                  if (isset($_SESSION['email']) || isset($_SESSION['userRole'])) {
                     echo '<a class="dropdown-item" href="/LP-XML-PROJECT/public/logout">Log out</a>';
                  }
                  ?>
               </div>
            </li>
         </ul>
      </div>
   </nav>
</body>

</html>