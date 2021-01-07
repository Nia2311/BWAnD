<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>Hello, world!</title>
  </head>
  <body>

    <nav class="navbar navbar-dark bg-primary">
        <h5 style="color:white">Dashboard Produksi</h5>
        <a class="navbar-brand" href="#"> <img src="<?= base_url();?>/assets/images/bakery-white.png" width="140px"> </a>
    </nav>

        <div class="row no-gutters">
        <div class="col-md-3">
            <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item mb-3">
                  <img src="D://burhan.png" alt="..." class="rounded-circle ml-5 mt-2" width="75px">
                    <h2 class="text-white">Nama Pengguna</h2>
                    <h5 class="text-white"> Role Pengguna </h5>
                  </li> <hr>
                <hr>
                <li class="nav-item">
                  <a class="nav-link text-white bg-secondary" href="#"> <span style=" font-size: larger;"><i class="far fa-calendar-check mr-2"></i>Pemesanan Hari ini</span></a>
                </li> <hr>
                <li class="nav-item">
                  <a class="nav-link text-white bg-dark" href="D://template2.html"><span style=" font-size: larger;"><i class="fas fa-biking mr-2"></i>Armada </span></a>
                </li> <hr>
                <li class="nav-item">
                  <a class="nav-link text-white bg-dark" href="D://template3.html"><span style=" font-size: larger;"> <i class="fas fa-map-marker-alt mr-2"></i>Kota Cabang </span></a>
                </li> <hr>
                <li class="nav-item">
                  <a class="nav-link text-white bg-dark" href="D://template4.html"><span style=" font-size: larger;"><i class="fas fa-history mr-2"></i>Riwayat </span></a>
                </li>
                <hr>
                <li class="nav-item nav-pills">
                    <button class="btn btn-block bg-danger text-white" role="button" href=#>
                      <span style="font-size: larger;">Keluar</span>
                    </button>
                </li>
                <hr>
              </ul>
            </div>
        </nav>
        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>