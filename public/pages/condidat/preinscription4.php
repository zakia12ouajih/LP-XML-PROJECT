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
      <h2>Choix de Licence:</h2>

      <form action="/LP-XML-PROJECT/public/register-process4" method="POST" class="row">



         <!-- Left Part -->
         <div class="col-md-6">
            <?php

            $subjects = array("DTS", "DUT", "BTS");

            echo '<div class="form-group">
            <label for="typeBac2">type Bac+2:</label>
            <select name="typeBac2" class="form-control" id="typeBac2" required>';

            foreach ($subjects as $subject) {
               echo '<option value="' . $subject . '">' . $subject . '</option>';
            }

            echo '</select>
            </div>';

            echo '<div class="form-group">
            <label for="dateObtnBac2">date obtunation:</label>
            <input type="date" name="dateObtnBac2" class="form-control" id="dateObtnBac2" placeholder="Enter date" required>
            </div>'; // Close the select form group



            // Additional input for the note

            ?>
            <div class="form-group">
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>


         </div>

         <!-- Right Part -->
         <div class="col-md-6">
            <?php
            $mentions = array("tres bien", "bien", "assez bien", "passable");




            echo '<div class="form-group">
            <label for="montionBac2">montion: </label>
            <select name="montionBac2" class="form-control" id="montionBac2" required>';

            foreach ($mentions as $mention) {
               echo '<option value="' . $mention . '">' . $mention . '</option>';
            }

            echo '</select></div>';

            echo '<div class="form-group">
            <label for="noteBac2">Note Bac 2:</label>
            <input type="text" name="noteBac2" class="form-control" id="noteBac2" placeholder="Enter note" required>
            </div>';
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