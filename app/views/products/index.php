<div class="container d-flex justify-content-evenly">
  <?= var_dump($data) ?>
  <?php foreach( $data['products'] as $product ) : ?>
    <div class="card m-3" style="width: 18rem;">
      <img src="<?= BASEURL ?>/images/products/<?= $product['gambar_barang'] ?>" width="100px" class="card-img-top" alt="<?= $product['nama_barang'] ?>">
      <div class="card-body">
        <h5 class="card-title"><?= $product['nama_barang'] ?></h5>
        <h5 class="card-subtitle text-muted"><?= $product['harga_barang'] ?></h5>
        <p class="card-text"><?= $product['deskripsi_barang'] ?></p>
        <a href="#" class="btn btn-primary">detail</a>
      </div>
    </div>
  <?php endforeach; ?>
</div>