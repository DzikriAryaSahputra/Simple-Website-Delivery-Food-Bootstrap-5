<?= $this->extend('admin/layout'); ?>

<?= $this->section('mainadmin'); ?>


<h2 class="mb-3"><i class="fas fa-box"></i> Form Edit Produk</h2>
<hr>
<div class="mb-3">
  
<form action="<?=base_url('admin/produk/'. $pro['product_id'] . '/update');?>" method="POST" enctype="multipart/form-data" id="formTambah">
          <div class="mb-3">
            <label for="nama">Nama Produk</label>
            <input type="text" name="product_name" id="product_name" class="form-control" value="<?= $pro['product_name']?>">
          </div>
          <div class="mb-3">
            <label for="deskripsi">Deskripsi Produk</label>
            <input type="text" name="product_description" id="product_description" class="form-control" value="<?= $pro['product_description']?>">
          </div>
          <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="text" name="price" id="price" class="form-control" value="<?= $pro['price']?>">
          </div>
          <div class="mb-3">
            <label for="stok">Stok</label>
            <input type="text" name="stock" id="stock" class="form-control" value="<?= $pro['stock']?>">
          </div>
          <div class="mb-3">
            <label for="tahun">Cover</label>
            <input type="file" accept="image/*" name="thumbnail_url" id="thumbnail_url" class="form-control">
            <img src="<?= base_url($pro['thumbnail_url'])?>" alt=""  class="img-thumbnail" style="width:150px; height:auto;">
          </div>
          <div class="mb-3">
            <a href="<?= base_url('admin/produk')?>" class="btn btn-secondary">Kembali</a>
            <button class="btn btn-warning" type="submit">Update</button>
          </div>
        </form>
</div>





<?= $this->endSection(); ?>