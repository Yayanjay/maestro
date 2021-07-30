<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Dashboard</h1>
      <div class="card mb-4">
        <div class="row">
          <div class="col">
            <?= Flasher::flash(); ?>
          </div>
        </div>
        <div class="card-header">
          <i class="fas fa-table me-1"></i>
          Tabel Produk
        </div>
          <!-- Button trigger add product modal -->
          <div class="card-body">
            <button type="button" class="btn btn-info mb-2 text-white" data-bs-toggle="modal" data-bs-target="#tambahProduk">
              Tambah Produk
            </button>
              <table id="datatablesSimple">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $nomor = 1; foreach( $data['products'] as $product ) : ?>
                    <tr>
                      <td><?= $nomor ?></td>
                      <td><img src="<?= BASEURL ?>/images/products/<?=$product['gambar_barang']?>" width="200px" alt=""></td>
                      <td><?= $product['nama_barang'] ?></td>
                      <td><?= $product['harga_barang'] ?></td>
                      <td><?= $product['deskripsi_barang'] ?></td>
                      <td><?= $product['stok_barang'] ?></td>
                      <td style="width: 150px;">
                        <a role="button" href="<?= BASEURL?>/product/edit_product/<?= $product['id_barang']?>" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $product['id_barang']; ?>" class="btn btn-warning showUpdateModal">
                          <i class="far fa-edit"></i>
                        </a>
                        <a class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="<?= BASEURL?>/product/delete_product/<?= $product['id_barang']?>">
                          <i class="far fa-trash-alt"></i>
                        </a>
                      </td>
                    </tr>
                  <?php $nomor++; endforeach; ?>
                </tbody>
              </table>
          </div>
      </div>
    </div>
  </main>
</div>
    <!-- Modal -->
    <div class="modal fade" id="tambahProduk" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahData">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>/product/add_product" method="post" enctype="multipart/form-data">
                        <div class="mb-2 form-floating">
                            <input type="text" name="namaproduk" id="namaproduk" class="form-control" autocomplete="off" placeholder="cth: Knalpot" required>
                            <label class="mb-1" for="namaproduk">Nama Produk</label>
                        </div>
                        <div class="mb-2 form-floating">
                            <input type="number" name="hargaproduk" id="hargaproduk" class="form-control" placeholder="cth: 10000" min="1000" required>
                            <label class="mb-1" for="hargaproduk">Harga Produk</label>
                        </div>
                        <div class="mb-2 form-floating">
                            <input type="file" name="gambarproduk" id="gambarproduk" class="form-control form-control-sm" required>
                        </div>
                        <div class="mb-2 form-floating">
                            <input type="number" name="stokproduk" id="stokproduk" class="form-control" placeholder="cth: 10000" required>
                            <label class="mb-1" for="stokproduk">Stok Produk</label>
                        </div>
                        <div class="mb-2 form-floating">
                            <textarea style="height: 150px;" type="textarea" name="deskripsiproduk" id="deskripsiproduk" class="form-control" placeholder="Deskripsi" required></textarea>
                            <label class="mb-1" for="deskripsiproduk">Deskripsi Produk</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
    </div>
    
