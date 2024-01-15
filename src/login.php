<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $email = $_POST["email"];
   $password = $_POST["password"];

   $xml = simplexml_load_file('../xml-data/data.xml');
   $authenticated = false;

   foreach ($xml->users->user as $user) {
      if ($user->email == $email && $password == $user->password) {
         $_SESSION['email'] = $email;
         $authenticated = true;
         break;
      }
   }

   if (!$authenticated) {
      $_SESSION['error_message'] = "Invalid username or password.";
   }

   var_dump($authenticated);

   if ($authenticated) {
      header("Location: /LP-XML-PROJECT/public/home-test");
      exit();
   } else {
      header("Location: /LP-XML-PROJECT/public/login");
      exit();
   }
}
