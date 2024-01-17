<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$date_naissance = $_POST["date_naissance"];
$tele = $_POST["tele"];
$cin = $_POST["cin"];
$cne = $_POST["cne"];
$email = $_POST["email"];
$password = $_POST["password"]; // Hash the password
$_SESSION['cne'] = $cne;
$xmlPath = '../xml-data/data.xml';

if (file_exists($xmlPath)) {
$xml = simplexml_load_file($xmlPath);
} else {
$xml = new SimpleXMLElement('<est-safi></est-safi>');
}

// Check if the <condidats> element exists, if not, create it
   if (!isset($xml->condidats)) {
   $xml->addChild('condidats');
   }

   $condidats = $xml->condidats;

   $condidat = $condidats->addChild('condidat');
   // Use addChild to add elements and attributes
   $condidat->addChild('nom', $nom);
   $condidat->addChild('prenom', $prenom);
   $condidat->addChild('date_naissance', $date_naissance);
   $condidat->addChild('tele', $tele);
   $condidat->addChild('cin', $cin);
   $condidat->addChild('email', $email);
   $condidat->addChild('password', $password);
   $condidat->addChild('role', 'condidat');
   // Add CNE as an attribute
   $condidat->addAttribute('cne', $cne);

   $xml->asXML($xmlPath);
   header('Location: /LP-XML-PROJECT/public/condidat/preinscription2');
   exit();
   }
