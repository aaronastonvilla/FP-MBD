<?php
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
      <title>Tenant Registrasi</title>
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
               <h1>Tenant Registration Form</h1>
               <form action="" method="POST">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Produk</label>
                    <input name="nama" type="text" class="form-control" id="exampleFormControlInput1">                                  <!-- input -->
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput3">Nomor KTP</label>
                    <input name="ktp" type="text" class="form-control" id="exampleFormControlInput3">                                  <!-- input -->
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput3">Kota</label>
                    <input name="kota" type="text" class="form-control" id="exampleFormControlInput3">                                  <!-- input -->
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput6">Nomor Telepon</label>
                    <input name="telp" type="text" class="form-control" id="exampleFormControlInput6" rows="3"></input>                 <!-- input -->
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput2">Email</label>
                    <input name="email" type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">  <!-- input -->
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Tentang Tenant</label>
                    <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>                    <!-- input -->
                  </div>
                  <input name="submit" type="submit" class="btn btn-info" value="Submit">
               </form>
               <?php
               $tl_id = $_SESSION['tl_id'];
               $t_nama = @$_POST['nama'];
               $t_ktp = @$_POST['ktp'];
               $t_kota = @$_POST['kota'];
               $t_telp = @$_POST['telp'];
               $t_email = @$_POST['email'];
               $t_deskripsi = @$_POST['deskripsi'];
               $submit = @$_POST['submit'];
               if($submit){
                  if($t_nama=="" || $t_ktp=="" || $t_kota=="" || $t_telp=="" || $t_email=="" || $t_deskripsi==""){
                    ?>
                    <script type="text/javascript">alert("semua informasi tidak boleh kosong")</script> <!-- nyelipkan alert js -->
                    <?php
                  }
                  else{
                    mysqli_query($db,"insert into tenant (tl_id, t_nama, t_ktp, t_kota, t_telp, t_email, t_deskripsi) values ('$tl_id', '$t_nama', '$t_ktp', '$t_kota', '$t_telp', '$t_email', '$t_deskripsi')") or die ($db->error);
                    $sql = mysqli_query($db,"select t_id from tenant where t_nama='$t_nama'") or die ($db->error); 
                    $data = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                    $_SESSION['t_id'] = $data['t_id'];
                    header("location: tenant_main.php");
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
