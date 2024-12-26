<?= $this->extend('admin/layout');?>

<?= $this->section('mainadmin') ?> 

<div class="col-12">
  <br>
  <h1><i class="fas fa-box"></i> Data Produk</h1>
  <!-- Topbar -->
  <?php if (session('sukses')): ?>
    <div class="mb-3">
      <div class="alert alert-success">
        <strong>Sukses</strong> <?= session('sukses') ?>
      </div>
    </div>
  <?php endif ?>

  <?php if (session('gagal')): ?>
    <div class="mb-3">
      <div class="alert alert-danger">
        <strong>gagal</strong> <?= session('gagal') ?>
      </div>
    </div>
  <?php endif ?>

  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>

  <!-- Topbar Search -->
  <form
    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
        aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-warning" type="button">
          <i class="fas fa-search fa-sm"></i>
        </button>
      </div>
    </div>
  </form>

  <hr>
  <div class="my-3">
    <button data-bs-toggle="modal" data-bs-target="#tambahModal" class="btn btn-dark"><i class="bi bi-plus-lg"></i>+ Tambah Data</button>
  </div>

  <table class="table table-striped mt-3">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Produk</th>
        <th>Deskripsi Produk</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Cover Product</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>

      <!-- Data Dari Database -->
      <?php foreach ($product as $pro): ?>
        <tr>
          <td><?=$pro['product_id']; ?></td>
          <td><?= $pro['product_name']; ?></td>
          <td><?= $pro['product_description']; ?></td>
          <td><?= $pro['price']; ?></td>
          <td><?=$pro['stock']; ?></td>
          <td>
    <a href="<?= base_url($pro['thumbnail_url']) ?>" target="_blank">
        <img src="<?= base_url($pro['thumbnail_url']) ?>" alt="<?= $pro['product_name'] ?>" class="img-thumbnail" style="width: 150px; height:auto;">
    </a>
</td>

          <td>
            <a href="<?= base_url('admin/produk/' .$pro['product_id'] . '/edit') ?>" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i> Edit</a>

<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal" data-id="<?= $pro['product_id']; ?>"><i class="fas fa-trash"></i> Hapus</button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>


<!-- Modal Tambah Produk -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/produk'); ?>" method="POST" enctype="multipart/form-data" id="formTambah">
          <div class="mb-3">
            <label for="nama">Nama Produk</label>
            <input type="text" name="product_name" id="product_name" class="form-control">
          </div>
          <div class="mb-3">
            <label for="deskripsi">Deskripsi Produk</label>
            <input type="text" name="product_description" id="product_description" class="form-control">
          </div>
          <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="text" name="price" id="price" class="form-control">
          </div>
          <div class="mb-3">
            <label for="stok">Stok</label>
            <input type="text" name="stock" id="stock" class="form-control">
          </div>
          <div class="mb-3">
            <label for="cover">Cover Product</label>
            <input type="file" accept="image/*" name="thumbnail_url" id="thumbnail_url" class="form-control">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formTambah" class="btn btn-primary"><i class="bi bi-floppy"></i>Simpan</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal hapus-->
<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/admin/hapus" method="POST" id="formHapus">
          <input type="hidden" name="id" id="idHapus" value="">
        </form>
        <p class="">Apakah Anda yakin menghapus data dengan ID <span id="textId"></span> ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formHapus" class="btn btn-danger"><i class="bi-trash"></i>Hapus</button>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>