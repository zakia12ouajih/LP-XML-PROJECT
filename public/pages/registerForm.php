<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <div class="container">
      <h2>Registration</h2>

      <form action="/LP-XML-PROJECT/public/register-process" method="POST" class="form-inline col-6" role="form">

         <div class="form-group">
            <label class="sr-only" for="">nom</label>
            <input type="text" name="nom" class="form-control" id="" placeholder="nom">
         </div>
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