<?php

 // Ensure that session_start() is called at the beginning of your script

if (isset($_POST['id'])) {
   $idToUpdate = $_POST['id'];
   $users = simplexml_load_file('../xml-data/data.xml');

   foreach ($users->adminEcole->children() as $admin) {
      if ($admin->getName() == 'admin' && $admin['idAdmin'] == $idToUpdate) {
         // Update admin
         $admin->nom = $_POST['nom'];
         $admin->prenom = $_POST['prenom'];
         $admin->tele = $_POST['tele'];
         $admin->cin = $_POST['cin'];
         $admin->email = $_POST['email'];
         $admin->password = $_POST['password'];
         $admin->role = $_POST['role'];
         break;
      } elseif ($admin->getName() == 'directeur-generale' && $admin['idDirecteur-generale'] == $idToUpdate) {
         // Update directeur-generale
         $admin->nom = $_POST['nom'];
         $admin->prenom = $_POST['prenom'];
         $admin->tele = $_POST['tele'];
         $admin->cin = $_POST['cin'];
         $admin->email = $_POST['email'];
         $admin->password = $_POST['password'];
         $admin->role = $_POST['role'];
         break;
      } elseif ($admin->getName() == 'directeur-adjoint' && $admin['idDirecteur-adjoint'] == $idToUpdate) {
         // Update directeur-adjoint
         $admin->nom = $_POST['nom'];
         $admin->prenom = $_POST['prenom'];
         $admin->tele = $_POST['tele'];
         $admin->cin = $_POST['cin'];
         $admin->email = $_POST['email'];
         $admin->password = $_POST['password'];
         $admin->role = $_POST['role'];
         break;
      } elseif ($admin->getName() == 'chef-departement' && $admin['idChef-departement'] == $idToUpdate) {
         // Update chef-departement
         $admin->nom = $_POST['nom'];
         $admin->prenom = $_POST['prenom'];
         $admin->tele = $_POST['tele'];
         $admin->cin = $_POST['cin'];
         $admin->email = $_POST['email'];
         $admin->password = $_POST['password'];
         $admin->role = $_POST['role'];
         break;
      }elseif ($admin->getName() == 'chef-scolarite' && $admin['idChef-scolarite'] == $idToUpdate) {
         // Update chef-scolarite
         $admin->nom = $_POST['nom'];
         $admin->prenom = $_POST['prenom'];
         $admin->tele = $_POST['tele'];
         $admin->cin = $_POST['cin'];
         $admin->email = $_POST['email'];
         $admin->password = $_POST['password'];
         $admin->role = $_POST['role'];
         break;
      }
   }

   file_put_contents('../xml-data/data.xml', $users->asXML());
   $_SESSION['message'] = 'Member updated successfully';
   header("Location: /LP-XML-PROJECT/public/admin/homeAdmin/administration");
   echo 'good';
} else {
   $_SESSION['message'] = 'Select member to edit first';
   echo 'bad';
   
}
