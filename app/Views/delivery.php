<?= $this->extend('layout');?>
<br>
<br>
<?= $this->section('main')?>

  <div class="container">
      <h1>Informasi Pengiriman Makanan</h1>
      <div class="row">
        <div class="col-9">
          <table class="table table-stripe">
            <thead>
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Detail Makanan</th>
                <th scope="col">Qty</th>
                <th scope="col">Harga</th>
                <th scope="col">Total</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <th scope="row">#0001</th>
                <td>
                  <img src="<?= base_url().'images/1.jpg'?>" alt="" style="width: 150px; height:auto;">
                  <h5>Burger XL</h5>
                </td>
                <td>1</td>
                <td>Rp50,000</td>
                <td>Rp50,000</td>
                <td>
                  <button class="btn btn-sm btn-success">Dalam Perjalanan</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-3">
          <div class="">
            <h2 class="text-secondary">Total Bayar</h2>
            <h2>Rp50,000</h2>
            <div class="mt-5">
            </div>
          </div>
        </div>
      </div>
  </div>  
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <?= $this->endSection();?>
