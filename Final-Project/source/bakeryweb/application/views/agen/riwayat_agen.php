<div class="container my-3">

  <div class="alert alert-info bg-light ">
    <h2 class="mb-3">Riwayat</h2>
    <div class="d-flex justify-content-between my-3">
      
      <button class="btn btn-sm">
        <select class="custom-select" name="tanggal" id="tanggal">
          <option selected disabled> - Pilih Tanggal - </option>
          <?php foreach ($tanggal as $value) : ?>
            <option value="<?= $value->tanggal ?>"> <?= date('d M Y', strtotime($value->tanggal)); ?></option>
          <?php endforeach; ?>
        </select>
      </button>
      <button class="btn btn-primary">
        <a href="">tes</a>
      </button>
    </div>
    <div class="table-responsive-md">
      <table class="table table-striped">
        <thead class="bg-primary text-white">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Roti </th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody id="data">
        </tbody>
        <tr>
          <td></td>
          <td> <b> Total </b></td>
          <td id="total"></td>
        </tr>
      </table>
    </div>
  </div>
</div>

          <div class="alert alert-info bg-light ">
            <h2 class="mb-3">Riwayat</h2>
            <div class="d-flex justify-content-between my-3">
                <h5 class="m-2">Ini tanggal</h5>
                <button class="btn btn-sm">
                  <select class="custom-select" name="tanggal" id="tanggal">
                      <option selected disabled> - Pilih Tanggal - </option>
                  <?php foreach($tanggal as $value): ?>
                      <option value="<?=$value->tanggal?>"> <?= date('d M Y', strtotime($value->tanggal)); ?></option>
                  <?php endforeach; ?>
                  </select>
                </button>
            </div>
            <div class="table-responsive-md">
                <table class="table table-striped">
                    <thead class="bg-primary text-white">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Roti </th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody id="data">
                    </tbody>
                    <tr>
                        <td></td>
                        <td> <b> Total </b></td>
                        <td id="total"></td>
                      </tr>
                  </table>
                </div>
            </div>
        </div>

