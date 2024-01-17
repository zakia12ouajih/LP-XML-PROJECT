<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <!-- Include Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
   <div class="container">
      <h2>Information Personnelle</h2>

      <form action="/LP-XML-PROJECT/public/register-process" method="POST" class="row">

         <!-- Left Part -->
         <div class="col-md-6">
            <?php
            $leftFields = array(
               "nom" => "Nom",
               "prenom" => "Prénom",
               "date_naissance" => "Date de Naissance",
               "tele" => "Téléphone"
            );

            foreach ($leftFields as $fieldName => $fieldLabel) {
               echo '<div class="form-group">
                  <label for="' . $fieldName . '">' . $fieldLabel . ':</label>';
               // Check if the field is a date field
               if ($fieldName === "date_naissance") {
                  echo '<input type="date" name="' . $fieldName . '" class="form-control" id="' . $fieldName . '" required>';
               } else {
                  echo '<input type="text" name="' . $fieldName . '" class="form-control" id="' . $fieldName . '" placeholder="' . $fieldLabel . '" required>';
               }
               echo '</div>';
            }
            ?>
            <div class="form-group">
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>
         </div>

         <!-- Right Part -->
         <div class="col-md-6">
            <?php
            $rightFields1 = array(
               "cin" => "CIN",
               "cne" => "CNE",
               "email" => "Email",
               "password" => "Mot de Passe"
            );

            foreach ($rightFields1 as $fieldName => $fieldLabel) {
               echo '<div class="form-group">
                  <label for="' . $fieldName . '">' . $fieldLabel . ':</label>
                  <input type="' . $fieldName . '" name="' . $fieldName . '" class="form-control" id="' . $fieldName . '" placeholder="' . $fieldName . '" required>
               </div>';
            }
            ?>
         </div>

         <!-- ... (other parts of the form) ... -->


      </form>



      <!-- Left Part -->







   </div>

   <!-- Include Bootstrap JS and Popper.js -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>