<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $email = $_POST["email"];
   $password = $_POST["password"];

   $xml = simplexml_load_file('../xml-data/data.xml');

   if ($xml === false) {
      die('Failed to load XML file');
   }

   $authenticated = false;
   $userRole = '';

   // Check adminApp users
   foreach ($xml->adminApp as $admin) {
      if ($admin->email == $email && $password == $admin->password) {
         $_SESSION['email'] = $email;
         $userRole = (string)$admin->role;
         $authenticated = true;
         break;
      }
   }

   // If not found in adminApp, check adminEcole users
   if (!$authenticated) {
      foreach ($xml->adminEcole->children() as $user) {
         if ($user->email == $email && $password == $user->password) {
            $_SESSION['email'] = $email;
            $userRole = (string)$user->role;
            $authenticated = true;
            break;
         }
      }
   }

   if (!$authenticated) {
      $_SESSION['error_message'] = "Invalid username or password.";
   }

   // Check user role and redirect accordingly
   if ($authenticated) {
      switch ($userRole) {
         case 'admin':
            header("Location: /LP-XML-PROJECT/public/admin/homeAdmin");
            break;
         case 'directeur-generale':
            header("Location: /LP-XML-PROJECT/public/directeur-adjoint/homeAD"); // Replace with the actual path
            break;
            // Add cases for other roles as needed
         default:
            header("Location: /LP-XML-PROJECT/public/login");
            break;
      }

      exit();
   }
}
