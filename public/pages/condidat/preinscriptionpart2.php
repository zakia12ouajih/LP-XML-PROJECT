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
      <h2>Information Bac</h2>

      <form action="/LP-XML-PROJECT/public/register-process2" method="POST" class="row">



         <!-- Left Part -->
         <div class="col-md-6">
            <?php

            $subjects = array("PC", "SVT", "MATH");

            echo '<div class="form-group">
            <label for="typeBac">Select Bac:</label>
            <select name="typeBac" class="form-control" id="typeBac" required>';

            foreach ($subjects as $subject) {
               echo '<option value="' . $subject . '">' . $subject . '</option>';
            }

            echo '</select>
            </div>';

            echo '<div class="form-group">
            <label for="dateObtnBac">date obtunation:</label>
            <input type="date" name="dateObtnBac" class="form-control" id="dateObtnBac" placeholder="Enter date" required>
            </div>'; // Close the select form group



            // Additional input for the note
            echo '<div class="form-group">
            <label for="noteBac">Note Bac:</label>
            <input type="text" name="noteBac" class="form-control" id="noteBac" placeholder="Enter note" required>
            </div>';
            ?>
            <div class="form-group">
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>


         </div>

         <!-- Right Part -->
         <div class="col-md-6">
            <?php
            $academies = array("Académie Régionale d'Éducation et de Formation (AREF) Marrakech-Safi", "Académie Régionale d'Éducation et de Formation Souss-Massa", "Académie Régionale d'Éducation et de Formation Guelmim-Oued Noun", "Académie Régionale d'Éducation et de Formation Laâyoune-Sakia El Hamra");
            $mentions = array("tres bien", "bien", "assez bien", "passable");
            $regions = array("Marrakech-Safi", "Essaouira", "Agadir-Ida-Ou Tanane", "Guelmim-Oued Noun", "Laayoune-Sakia El Hamra");

            echo '<div class="form-group">
            <label for="academie">academie:</label>
            <select name="academie" class="form-control" id="academie" required>';

            foreach ($academies as $academie) {
               echo '<option value="' . $academie . '">' . $academie . '</option>';
            }

            echo '</select></div>';
            echo '<div class="form-group">
            <label for="region">region:</label>
            <select name="region" class="form-control" id="region" required>';

            foreach ($regions as $region) {
               echo '<option value="' . $region . '">' . $region . '</option>';
            }

            echo '</select>
            </div>';

            echo '<div class="form-group">
            <label for="montionBac">montion: </label>
            <select name="montionBac" class="form-control" id="montionBac" required>';

            foreach ($mentions as $mention) {
               echo '<option value="' . $mention . '">' . $mention . '</option>';
            }

            echo '</select></div>';
            ?>

            <br>

         </div>
      </form>
   </div>

   <!-- Include Bootstrap JS and Popper.js -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>