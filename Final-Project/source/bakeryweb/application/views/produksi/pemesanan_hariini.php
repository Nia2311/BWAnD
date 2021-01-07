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
					<!--<li class="nav-item">
						<a class="nav-link text-white bg-secondary" href="<?= base_url(); ?>Produksi"> <span style=" font-size: larger;"><i class="far fa-calendar-check mr-2"></i>Pemesanan Hari
								ini</span></a>
					</li>
					<hr>
					<li class="nav-item">
						<a class="nav-link text-white bg-dark" href="<?= base_url(); ?>Produksi/armada"><span style=" font-size: larger;"><i class="fas fa-biking mr-2"></i>Armada </span></a>
					</li>
					<hr>
					<li class="nav-item">
						<a class="nav-link text-white bg-dark" href="<?= base_url(); ?>Produksi/kotaCabang"><span style=" font-size: larger;"> <i class="fas fa-map-marker-alt mr-2"></i>Kota Cabang
							</span></a>
					</li>
					<hr>
					<li class="nav-item">
						<a class="nav-link text-white bg-dark" href="<?= base_url(); ?>Produksi/riwayat"><span style=" font-size: larger;"><i class="fas fa-history mr-2"></i>Riwayat </span></a>
					</li> -->
					<hr>
					<li class="nav-item nav-pills">
						<?= anchor('login/logout', '<button class="btn btn-block bg-danger text-white"><span style="font-size: larger; text-decoration: none" class="text-white">Keluar</span></button>') ?>
					</li>
					<hr>
				</ul>
			</div>
		</nav>
	</div>

	<div class="col-md-9 container">
		<div class="mx-3 my-3">
			<h2 class="mb-3">Data Pemesanan</h2>
			<div class="d-flex justify-content-between my-3">
				<!--<button class="btn btn-primary m-2">
					<span style="font-size: larger;"> Unduh </span><i class="fas fa-download"></i>
				</button> -->
			</div>
			<div class="table-responsive-md">
				<table class="table table-striped">
					<thead style="background-color: #C69652; color: white;">
						<tr class="text-center">
							<th scope="col">Tanggal</th>
							<th scope="col">Cabang</th>
							<th scope="col">Nama</th>
							<th scope="col">Total</th>
							<th scope="col">Detail</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($pemesanan as $key) : ?>
							<?php $nama = $this->db->get_where('tb_akun', ['id_karyawan' => $key['id_karyawan']])->row_array(); ?>
							<tr class="text-center">
								<td><?=$key['tanggal']?></td>
								<td><?=$key['cabang']?></td>
								<td><?=$nama['nama']?></td>
								<td><?=$key['total_pemesanan']?></td>
								<td>
                                    <?= anchor('produksi/riwayatt/' . $key['id_karyawan'], '<button class="btn btn-primary" type="submit"><h6> Detail </h6></button>') ?>
                                </td>
							</tr>
						<?php endforeach; ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>