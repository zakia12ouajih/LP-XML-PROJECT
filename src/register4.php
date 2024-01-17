<?php

$cne = $_SESSION['cne'];
var_dump(($cne));
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $typeBac2 = $_POST["typeBac2"];
   $montionBac2 = $_POST["montionBac2"];

   $xmlPath = '../xml-data/data.xml';
   $uniqueId = 'a' . uniqid();
   $_SESSION['idBac2'] = $uniqueId;

   if (file_exists($xmlPath)) {
      $xml = simplexml_load_file($xmlPath);
   } else {
      $xml = new SimpleXMLElement('<est-safi></est-safi>');
   }

   // Check if the <diplomeBac> element exists, if not, create it
   if (!isset($xml->diplomeBac2)) {
      $xml->addChild('diplomeBac2');
   }

   $diplomeBac2 = $xml->diplomeBac2;

   // Add a new <bac> element under <diplomeBac>
   $bac = $diplomeBac2->addChild('bac2');
   $bac->addChild('status', 'true');
   $bac->addChild('dateObtnBac2', $dateObtnBac2);
   $bac->addChild('noteBac2', $noteBac2);
   $bac->addChild('montionBac2', $montionBac2);

   $bac->addAttribute('cne', $cne);
   $bac->addAttribute('idBac2', $uniqueId);

   $xml->asXML($xmlPath);
   header('Location: /LP-XML-PROJECT/public/condidat/preinscription4');
   exit();
}
