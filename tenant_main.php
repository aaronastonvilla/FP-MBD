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
   <body class="bg-light text-dark">
      <nav class="navbar navbar-dark bg-primary">
         <div class="container">
            <div class="navbar-header">
               <a href="#" class="navbar-brand">EV</a>
            </div>
            <!--<img src="https://pbs.twimg.com/profile_images/966279862875926529/H1ZNhoaB_normal.jpg" alt="Account" class="rounded-circle"></img><-->
            <a href="logout.php"><button type="button" class="btn btn-danger">Sign Out</button></a>
         </div>
      </nav>
      <div class="container">
         <div class="container">
           <h1>Event Yang Tersedia</h1>

            <div class="card-columns">
             <?php
             function random_color_part() {
               return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
             }

             function random_color() {
                 return random_color_part() . random_color_part() . random_color_part();
             } ?>
             <div class="card" style="width: 18rem;">

               <div class="card-img-top text-white" style="background-color: #<?php echo random_color(); ?>;">
                 <div class="card-body"><h5 class="card-title">Festival Rujak Surabaya</h5></div>
               </div>
               <!--<img class="card-img-top" src="https://www.picmonkey.com/blog/wp-content/uploads/2016/08/city-bokeh-resize.jpg" alt="Card image cap">-->
               <div class="card-body">
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               </div>
               <ul class="list-group list-group-flush">
                 <li class="list-group-item">Jalan Pemuda</li>
                 <li class="list-group-item"><a href="#">mail@festivalrujak.com</a></li>
                 <li class="list-group-item">20 Januari 2018- 22 Januari 2018</li>
               </ul>
               <div class="card-body text-center">
                 <a href="#" class="btn btn-primary">Lihat Detail</a>
                 <a href="#" class="btn btn-primary">Give Feedback</a>
               </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Kebab Turki Baba Rafi</h5>
                  <p class="card-text">Event tepat waktu acara ramai cuma meme kurang banyak.</p>
                  <p class="card-text"><small class="text-muted">3 out of 5 star</small></p>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">McDonald Indonesia</h5>
                  <p class="card-text">Ngikut apa kata orang aja.</p>
                  <p class="card-text"><small class="text-muted">1 out of 5 star</small></p>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Pedagang Rujak Cingur</h5>
                  <p class="card-text">Sepi dagangan saya.</p>
                  <p class="card-text"><small class="text-muted">4 out of 5 star</small></p>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Jualan Aqua</h5>
                  <p class="card-text">Beuh aqua di monopoli.</p>
                  <p class="card-text"><small class="text-muted">3 out of 5 star</small></p>
                </div>
              </div>


            </div>


            <div class="card-columns mt-3">
             <div class="card" style="width: 18rem;">

               <div class="card-img-top text-white" style="background-color: #<?php echo random_color(); ?>;">
                 <div class="card-body"><h5 class="card-title">Festival Rujak Surabaya</h5></div>
               </div>
               <!--<img class="card-img-top" src="https://www.picmonkey.com/blog/wp-content/uploads/2016/08/city-bokeh-resize.jpg" alt="Card image cap">-->
               <div class="card-body">
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               </div>
               <ul class="list-group list-group-flush">
                 <li class="list-group-item">Jalan Pemuda</li>
                 <li class="list-group-item"><a href="#">mail@festivalrujak.com</a></li>
                 <li class="list-group-item">20 Januari 2018- 22 Januari 2018</li>
               </ul>
               <div class="card-body text-center">
                 <a href="#" class="btn btn-primary">Lihat Detail</a>
                                  <a href="#" class="btn btn-primary">Give Feedback</a>
               </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Kebab Turki Baba Rafi</h5>
                  <p class="card-text">Event tepat waktu acara ramai cuma meme kurang banyak.</p>
                  <p class="card-text"><small class="text-muted">3 out of 5 star</small></p>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">McDonald Indonesia</h5>
                  <p class="card-text">Ngikut apa kata orang aja.</p>
                  <p class="card-text"><small class="text-muted">1 out of 5 star</small></p>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Pedagang Rujak Cingur</h5>
                  <p class="card-text">Sepi dagangan saya.</p>
                  <p class="card-text"><small class="text-muted">4 out of 5 star</small></p>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Jualan Aqua</h5>
                  <p class="card-text">Beuh aqua di monopoli.</p>
                  <p class="card-text"><small class="text-muted">3 out of 5 star</small></p>
                </div>
              </div>


            </div>


         </div>
         </div>
      </div>
   </body>
</html>
