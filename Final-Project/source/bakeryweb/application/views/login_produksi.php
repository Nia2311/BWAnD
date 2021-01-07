<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Login</title>
  </head>
  <body>
<div class="container d-flex justify-content-center">
    <div class="card " style="width: 391px; margin-top: 100px;">
        <div class="card text-center">
            <div class="card-header" style="background-color: #C69652;">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                    <a class="nav-link" style="color:white; border-style: none;" href="<?php echo base_url();?>login_armada">Produksi</a>
                    </li>
                    <li class="nav-item ml-5">
                        <a class="nav-link active " style="color:  #C69652; font-weight: 600; height:50px; width:200px;">Agen</a>
                    </li>
                </ul>
            </div>
            <div class="justify-content-center">
                <img class="mt-3" src="<?php echo base_url();?>assets/images/bakery.png" alt="logo" style="width:125px;">
            </div>
            <div class="card-body">
                <h2 class="card-title text-left" style="font-weight: 600;"> <span style="color: #C69652;"> | </span>LOGIN</h2>

                <form action="" method="POST">
                    <div class="form-group text-left">
                        <label for="nama" style="font-weight: 600; font-size: 20px;" >ID</label>
                        <input type="text" id="nama" class="form-control" placeholder="" >
                    </div>
                    <div class="form-group text-left">
                        <label for="pass" style="font-weight: 600; font-size: 20px;" >Kata Sandi</label>
                        <input type="password" id="pass" class="form-control" placeholder="" >
                    </div>
                    <button type="submit" class="btn btn-success container">Masuk</button>
                </form>
                <div class="m-3" >
                    <?php 
                        echo anchor('Halaman','<u style="color: #C69652;">Kembali ke Halaman Utama</u>');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
    <style>body{font-family: poppins;}</style>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>

