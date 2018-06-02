<?php 
ob_start();
@session_start();
include "db.php"
?>
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
      <title>Event Registrasi</title>
   </head>
   <body class="bg-light text-dark">
      <nav class="navbar navbar-dark bg-primary">
         <div class="container">
            <div class="navbar-header">
               <a href="#" class="navbar-brand">EV</a>
            </div>
            <!--<img src="https://pbs.twimg.com/profile_images/966279862875926529/H1ZNhoaB_normal.jpg" alt="Account" class="rounded-circle"></img><-->
         </div>
      </nav>
      <div class="container">
         <div class="container">
           <div class="mx-auto mt-5" style="width: 500px;">
            <div class="form-group">
               <div class="input-group mb-3"></div>
               <h1>Event Registration Form</h1>
               <form action="" method="POST">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Event</label>
                    <input name="nama" type="text" class="form-control" id="exampleFormControlInput1">                                  <!-- input -->
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput3">Lokasi</label>
                    <input name="lokasi" type="text" class="form-control" id="exampleFormControlInput3">                                  <!-- input -->
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput3">Kota</label>
                    <input name="kota"  type="text" class="form-control" id="exampleFormControlInput3">                                  <!-- input -->
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput4">Nomor Telepon</label>
                    <input name="telp" type="text" class="form-control" id="exampleFormControlInput4">                                  <!-- input -->
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput2">Email</label>
                    <input name="email" type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">  <!-- input -->
                  </div>
                  <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label">Tanggal Mulai</label>
                    <div class="col-10">
                      <input name="tglmulai" class="form-control" type="text" placeholder="2011/08/19" id="example-date-input">                   <!-- input -->
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-date-input2" class="col-2 col-form-label">Tanggal Selesai</label>
                    <div class="col-10">
                      <input name="tglselesai" class="form-control" type="text" placeholder="2011/08/19" id="example-date-input2">                  <!-- input -->
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-time-input" class="col-2 col-form-label">Jam</label>
                    <div class="col-10">
                      <input name="jam" class="form-control" type="text" placeholder="13:45:00" id="example-time-input">                     <!-- input -->
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <input name="submit" type="submit" class="btn btn-info">
               </form>
               <?php
               $el_id = $_SESSION['el_id'];
               $e_nama = @$_POST['nama'];
               $e_lokasi = @$_POST['lokasi'];
               $e_kota = @$_POST['kota'];
               $e_telp = @$_POST['telp'];
               $e_email = @$_POST['email'];
               $e_tglmulai = @$_POST['tglmulai'];
               $e_tglselesai = @$_POST['tglselesai'];
               $e_jam = @$_POST['jam'];
               $e_deskripsi = @$_POST['deskripsi'];
               $submit = @$_POST['submit'];
               if($submit){
                  if($e_nama=="" || $e_lokasi=="" || $e_kota=="" || $e_telp=="" || $e_email=="" || $e_tglmulai=="" || $e_tglselesai=="" || $e_jam=="" || $e_deskripsi==""){
                    ?>
                    <script type="text/javascript">alert("semua informasi tidak boleh kosong")</script> <!-- nyelipkan alert js -->
                    <?php
                  }
                  else{
                    mysqli_query($db,"insert into `event` (el_id, e_nama, e_lokasi, e_kota, e_telp, e_email, e_tglmulai, e_tglselesai, e_jam, e_deskripsi) values('$el_id', '$e_nama', '$e_lokasi', '$e_kota', '$e_telp', '$e_email', '$e_tglmulai', '$e_tglselesai', '$e_jam', '$e_deskripsi')") or die ($db->error);
                    $sql = mysqli_query($db,"select e_id from event where e_nama='$e_nama'") or die ($db->error); 
                    $data = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                    $_SESSION['e_id'] = $data['e_id'];
                    header("location: event_main.php");
                  }
                }
                ?>
               <div class="input-group mb-3"></div>
            </div>
          </div>


          </div>

         </div>
      </div>
   </body>
</html>