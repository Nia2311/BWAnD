<?php
defined('BASEPATH') or exit('No direct script access allowed');
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

<body style="background-color: antiquewhite;">
    <nav class="navbar navbar-light bg-success">
        <a class="navbar-brand text-white" href="#">
            <img src="<?= base_url(); ?>/assets/images/bakery-white.png" width="140px" alt="">
        </a>
        <h6 class="text-white my-2">
            Selamat Datang, <?= $this->session->userdata('nama'); ?> dari Cabang <?= $this->session->userdata('cabang'); ?> !
        </h6>
    </nav>
    <nav class="navbar navbar-light bg-light justify-content-start shadow-sm">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <span class="ml-3">
            <h5>Menu</h5>
        </span>
        <div class="collapse navbar-collapse text-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item m-3">
                    <img src="<?= base_url(); ?>/assets/images/armada.jpg" alt="..." class="rounded-circle" width="80px">
                    <h5> <?= $this->session->userdata('nama'); ?></h5>
                    <h7> Cabang <?= $this->session->userdata('cabang'); ?></h7>
                </li>
                <li class="nav-item m-2 mx-5 px-5">
                    <a class="nav-link" href="<?= base_url() ?>agen/kirimData">
                        <button class="btn btn-primary btn-block" role="button"> <b> Kirim Data Pemesanan </b> </button>
                    </a>
                </li>
                <li class="nav-item m-2 mx-5 px-5">
                    <a class="nav-link" href="<?= base_url(); ?>agen/riwayat_agen">
                        <button class="btn btn-secondary btn-block" role="button"> <b> Riwayat </b> </button>
                    </a>
                </li>
                <li class="nav-item m-2 mx-5 px-5">
                    <a href="<?= base_url(); ?>login/logout" class="btn btn-danger btn-block" role="button"><b> Keluar </b></a>
                </li>
            </ul>
        </div>
    </nav>