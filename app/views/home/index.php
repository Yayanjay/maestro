<!-- Header-->
<header class="bg-dark py-5">
  <div class="container px-4 px-lg-5 my-5">
    <div class="text-center text-white">
      <h1 class="display-4 fw-bolder">Shop in style</h1>
      <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
    </div>
  </div>
</header>
<!-- Section-->
<section class="py-5">
  <div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 d-flex justify-content-evenly">
      <?php foreach( $data['products'] as $product ) : ?>
        <div class="col mb-5">
          <div class="card">
            <!-- Product image-->
            <img class="card-img-top p-1" src="<?= BASEURL ?>/images/products/<?=$product['gambar_barang']?>" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder"><?= $product['nama_barang'] ?></h5>
                    <!-- Product price-->
                    Rp <?= number_format($product['harga_barang']) ?>
                </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent d-flex justify-content-center">
              <div class="text-center">
                <a class="btn btn-outline-warning mt-auto" style="z-index: 1000; position: relative;" href="<?= BASEURL ?>/cart/addToCart/<?=$product['id_barang']?>">Add to Cart</a>
              </div>
              <a href="<?= BASEURL ?>/product/detail/<?=$product['id_barang']?>" class="stretched-link"></a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>