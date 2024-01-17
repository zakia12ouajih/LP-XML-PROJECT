<?php
// deleteDG.php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
   $id = $_POST['id'];

   $users = simplexml_load_file('../xml-data/data.xml');
   $userFound = false;

   // Iterate through each directeur-generale
   foreach ($users->adminEcole->{"directeur-generale"} as $user) {
      if ((string)$user['idDirecteur-generale'] == $id) {
         // Remove the user
         $dom = dom_import_simplexml($user);
         $dom->parentNode->removeChild($dom);
         $userFound = true;
         break;
      }
   }

   if ($userFound) {
      // Save the changes
      file_put_contents('../xml-data/data.xml', $users->asXML());

      $_SESSION['message'] = 'Member deleted successfully';
      header('location: /LP-XML-PROJECT/public/admin/homeAdmin/administration');
      exit();
   } else {
      $_SESSION['message'] = 'User with ID ' . $id . ' not found';
      header('location: /LP-XML-PROJECT/public/admin/homeAdmin/administration');
      exit();
   }
} else {
   $_SESSION['message'] = 'Invalid request';
   header('location: /LP-XML-PROJECT/public/admin/homeAdmin/administration');
   exit();
}
