<?php

$cne = $_SESSION['cne'];
$_SESSION['idBac']=$uniqueId;
var_dump(($cne));
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$typeBac = $_POST["typeBac"];
$dateObtnBac = $_POST["dateObtnBac"];
$region = $_POST["region"];
$academie = $_POST["academie"];
$noteBac = $_POST["noteBac"];
$montionBac = $_POST["montionBac"];

$xmlPath = '../xml-data/data.xml';
$uniqueId = 'a' . uniqid();

if (file_exists($xmlPath)) {
$xml = simplexml_load_file($xmlPath);
} else {
$xml = new SimpleXMLElement('<est-safi></est-safi>');
}

// Check if the <diplomeBac> element exists, if not, create it
   if (!isset($xml->diplomeBac)) {
   $xml->addChild('diplomeBac');
   }

   $diplomeBac = $xml->diplomeBac;

   // Add a new <bac> element under <diplomeBac>
         $bac = $diplomeBac->addChild('bac');
         $bac->addChild('typeBac', $typeBac);
         $bac->addChild('dateObtnBac', $dateObtnBac);
         $bac->addChild('region', $region);
         $bac->addChild('academie', $academie);
         $bac->addChild('noteBac', $noteBac);
         $bac->addChild('montionBac', $montionBac);

         $bac->addAttribute('cne', $cne);
         $bac->addAttribute('idBac', $uniqueId);

         $xml->asXML($xmlPath);
         header('Location: /LP-XML-PROJECT/public/condidat/preinscription3');
         exit();
         }