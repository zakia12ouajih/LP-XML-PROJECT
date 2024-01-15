<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Document</title>
</head>

<body>
   <div class="container">
      <h2>Login</h2>

   

      <?php if (isset($_SESSION['error_message'])) : ?>
         <div class="alert alert-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
               <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
               <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
            </svg>
            <strong><?php echo $_SESSION['error_message']; ?></strong>
         </div>

         <?php unset($_SESSION['error_message']); ?>
      <?php endif; ?>

      <form action="/LP-XML-PROJECT/public/login-process" method="POST" class="form-inline col-6" role="form">


         <div class="form-group">
            <label class="sr-only" for="">email</label>
            <input type="email" name="email" class="form-control" id="" placeholder="email">
         </div>
         <div class="form-group">
            <label class="sr-only" for="">password</label>
            <input type="password" name="password" class="form-control" id="" placeholder="password">
         </div>



         <button type="submit" class="btn btn-primary">Submit</button>
      </form>


   </div>
</body>

</html>