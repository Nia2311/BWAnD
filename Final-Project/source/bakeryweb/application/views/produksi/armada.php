<div class="row no-gutters">
  <div class="col-md-3">
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav nav-pills flex-column">
          <li class="nav-item my-2 text-center">
            <img src="<?= base_url(); ?>assets/images/admin.jpg" class="rounded-circle my-2" width="100px">
            <h2 class="text-white"><?= $this->session->userdata('nama'); ?></h2>
            <h5 class="text-white"> Produksi </h5>
          </li>
          <hr>
          <hr>
          <li class="nav-item">
            <a class="nav-link text-white bg-dark" href="<?= base_url(); ?>Produksi"> <span style=" font-size: larger;"><i class="far fa-calendar-check mr-2"></i>Pemesanan Hari ini</span></a>
          </li>
          <hr>
          <li class="nav-item">
            <a class="nav-link text-white bg-secondary" href="<?= base_url(); ?>Produksi/armada"><span style=" font-size: larger;"><i class="fas fa-biking mr-2"></i>Armada </span></a>
          </li>
          <hr>
          <li class="nav-item">
            <a class="nav-link text-white bg-dark" href="<?= base_url(); ?>Produksi/kotaCabang"><span style=" font-size: larger;"> <i class="fas fa-map-marker-alt mr-2"></i>Kota Cabang </span></a>
          </li>
          <hr>
          <li class="nav-item">
            <a class="nav-link text-white bg-dark" href="<?= base_url(); ?>Produksi/riwayat"><span style=" font-size: larger;"><i class="fas fa-history mr-2"></i>Riwayat </span></a>
          </li>
          <hr>
          <li class="nav-item nav-pills">
            <?= anchor('login/logout', '<button class="btn btn-block bg-danger text-white"><span style="font-size: larger; text-decoration: none" class="text-white">Keluar</span></button>') ?>
          </li>
          <hr>
        </ul>
      </div>
    </nav>
  </div>

  <div class="col-md-9">
    <div class="container">
      tes
    </div>

  </div>