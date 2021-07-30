<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Data Costumer</h1>
      <div class="card mb-4">
        <div class="card-header">
          <i class="fas fa-table me-1"></i>
          Tabel Data Costumer
        </div>
          <!-- Button trigger add product modal -->
          <div class="card-body">
              <table id="datatablesSimple">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $nomor = 1; foreach( $data['costumers'] as $costumer ) : ?>
                    
                    <tr>
                      <td><?= $nomor ?></td>
                      <td><?= $costumer['fullname'] ?></td>
                      <td><?= $costumer['email'] ?></td>
                      <td><?= $costumer['phone'] ?></td>
                      <td><?= $costumer['address'] ?></td>
                      <td>
                          <button class="btn btn-warning">
                            <i class="far fa-edit"></i>
                          </button>
                          <button class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                          </button>
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
            </div>
        </div>
    </div>
    
