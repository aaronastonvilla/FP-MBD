<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="keepgrid.css">
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="js.js"></script>
      <title>Note by Aufa Wibowo</title>
   </head>
   <body>
      <nav class="navbar navbar-dark bg-primary">
         <div class="container">
            <div class="navbar-header">
               <a href="http://aufa.kuliahweb.net/note/note.php" class="navbar-brand">Note</a>
            </div>
            <!--<img src="https://pbs.twimg.com/profile_images/966279862875926529/H1ZNhoaB_normal.jpg" alt="Account" class="rounded-circle"></img><-->
            <a href="logout.php"><button type="button" class="btn btn-danger">Sign Out</button></a>
         </div>
      </nav>
      <div class="container">
         <div class="container">
            <div class="mx-auto mt-5" style="width: 500px;">
            <div class="form-group">
               <div class="input-group mb-3"></div>
               <h1>Sign Up First!</h1>
               <form action="note.php" method="POST">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Username</label>
                    <input name="eventusername" type="text" class="form-control" id="exampleFormControlInput1">       <!-- input -->
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput2">Password</label>
                    <input name="eventpassword" type="password" class="form-control" id="exampleFormControlInput2">   <!-- input -->
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput3">Retype Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput3">                        <!-- input -->
                  </div>
                  <button type="submit" class="btn btn-info">Submit</button>
               </form>
               <div class="input-group mb-3"></div>
            </div>
          </div>

          </div>

         </div>
      </div>
   </body>
</html>
