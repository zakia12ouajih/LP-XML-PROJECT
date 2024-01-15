<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $nom = $_POST["nom"];
   $email = $_POST["email"];
   $password = $_POST["password"]; // Hash the password

   $xmlPath = '../xml-data/data.xml';

   if (file_exists($xmlPath)) {
      $xml = simplexml_load_file($xmlPath);
   } else {
      $xml = new SimpleXMLElement('<est-safi></est-safi>');
   }

   // Check if the <users> element exists, if not, create it
   if (!isset($xml->users)) {
      $xml->addChild('users');
   }

   $users = $xml->users;

   $user = $users->addChild('user');
   $user->addChild('nom', $nom);
   $user->addChild('password', $password);
   $user->addChild('email', $email);
   $user->addChild('role', 'condidat');

   $xml->asXML($xmlPath);

   header("Location: /LP-XML-PROJECT/public/login");
   exit();
}
