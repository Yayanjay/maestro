<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Data Admin</h1>
      <div class="card mb-4">
        <div class="row">
          <div class="col-lg-6">
            <?= Flasher::flash(); ?>
          </div>
        </div>
        <div class="card-header">
          <i class="fas fa-table me-1"></i>
          Tabel Data Admin
        </div>
          <!-- Button trigger add product modal -->
          <div class="card-body">
            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#tambahProduk">
              Tambah Admin
            </button>
              <table id="datatablesSimple">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $nomor = 1; foreach( $data['admins'] as $admin ) : ?>
                    
                    <tr>
                      <td><?= $nomor ?></td>
                      <td><?= $admin['fullname'] ?></td>
                      <td><?= $admin['email'] ?></td>
                      <td><?= $admin['phone'] ?></td>
                      <td><?= $admin['address'] ?></td>
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
                    <form action="<?= BASEURL ?>/products/add_product" method="post" enctype="multipart/form-data">
                        <div class="mb-2 form-floating">
                            <input type="text" name="namaproduk" id="namaproduk" class="form-control" placeholder="cth: Knalpot" required>
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
    
