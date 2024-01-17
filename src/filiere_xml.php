<?php
$xmlFile = '../xml-data/data.xml';
$xslFile = '../xslt/filiere.xslt';

$xml = new DOMDocument;
$xml->load($xmlFile);

$xsd = '../xml-data/data.xsd';
$valid = $xml->schemaValidate($xsd);

if ($valid) {
   $xsl = new DOMDocument;
   $xsl->load($xslFile);

   $proc = new XSLTProcessor;
   $proc->importStyleSheet($xsl);

   echo $proc->transformToXML($xml);
} else {
   echo 'XML is not valid according to the schema.';
}
