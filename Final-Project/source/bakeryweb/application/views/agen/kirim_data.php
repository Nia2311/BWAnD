
 
<div class="container">
        <div class="alert alert-info bg-light my-5 ">
            <form action="<?= base_url();?>agen/tambahroti" method="POST">
            <?= $this->session->flashdata('message'); ?>
                <div class="form-group row px-5 mt-3">
                    <label for="jenisRoti" class="col-sm-4 col-form-label"> <h5>Jenis Roti</h5></label>
                    <div class="col-sm-8">
                        <select class="form-control" id="jenisRoti" name="jenisRoti" >
                        <option selected disabled> - Pilih - </option>
                            <?php foreach($jenisroti as $key) : ?>
                            <option value="<?= $key->id_jenisRoti; ?>" > <?= $key->nama_jenisRoti; ?> </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                  </div>
                
                  <div class="form-group row px-5">
                    <label for="roti" class="col-sm-4 col-form-label"> <h5>Nama Roti</h5></label>
                    <div class="col-sm-8">
                        <select class="form-control" id="roti" name="roti" >
                        <option selected disabled> - Pilih - </option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group row px-5">
                    <label for="jumlahRoti" class="col-sm-4 col-form-label"> <h5>Jumlah Roti</h5></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="jumlahRoti" name="jumlah" required>
                    </div>
                  </div>
            
                <div class="px-5 mx-5 mb-3">
                    <button class="btn btn-primary btn-block" type="submit" >
                        <h6>Tambah</h6>
                    </button>
                </div>
            </div>
            </form>
        </div>
        
    <div class="container">
        <div class="alert alert-info bg-light ">
            <div class="table-responsive-md mb-3 mt-5">
                <table class="table table-striped">
                    <thead class="bg-info text-white">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Nama Roti </th>
                        <th scope="col">Jenis Roti</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                    </thead>
                    <tbody>
                <?php
                    $no = 1;
                    $count = $this->session->userdata('tabel'); 
                    if(empty($count)){

                    }else{
                    foreach($count as $tabelroti => $key): ?>
                    <?php $jenis = $this->db->get_where('jenisroti',['id_jenisRoti' => $key['jenisRoti']])->row_array(); ?>
                    <tr>
                        <th scope="row"><?= $no++;?></th>
                        <td><?= $key['roti'] ?></td>
                        <td><?= $jenis['nama_jenisRoti'] ?></td>
                        <td><?= $key['jumlah'] ?></td>
                        <td>
                            <?= anchor('agen/hapus/'.$tabelroti,'<button class="btn btn-danger" type="submit"><h6> Hapus </h6></button>') ?>
                        </td>
                    </tr>
                
                    <?php endforeach;} ?>
                    <tr>
                        <td></td>
                        <td> <b> Total </b></td>
                        <td></td>
                        <?= '<td><b>'.$this->session->userdata('total').'</b></td>'; ?>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
                
                <div class="mx-5 px-5">
                <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal">
                    <h5> Kirim </h5>
                </button>
                </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda Yakin ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <form action="<?= base_url();?>Agen/kirim_tb_pemesanan" method="POST">
                        <button class="btn btn-primary" type="submit"> Kirim </button>
                </form>
            </div>
            </div>
        </div>
        </div>
        <?= $this->session->flashdata('berhasil');?>