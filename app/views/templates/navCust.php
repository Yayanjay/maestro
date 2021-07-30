<!-- NAV COSTUMER -->
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid px-4 px-lg-5">
      <a class="navbar-brand" href="<?= BASEURL ?>">
        <img src="<?= BASEURL ?>/images/maestro.jpeg" width="200px" alt="" class="rounded">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
          <li class="nav-item"><a class="nav-link" aria-current="page" href="<?= BASEURL ?>/">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= BASEURL ?>/about">About</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#!">All Products</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#!">Products</a></li>
                  <li><a class="dropdown-item" href="#!">Services</a></li>
              </ul>
          </li>
        </ul>
        Hi, <?= $data['user']['name']?>
        <form class="d-flex ms-2">
          <div class="dropdown">
            <a class="btn btn-outline-dark dropdown me-2" id="dropdownMenuCart" data-bs-toggle="dropdown" role="button">
              <i class="bi-cart-fill me-1"></i>
              Cart
              <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end my-2" style="width: 300px;">
              <li><h6 class="dropdown-header">Produk yang ditambahkan</h6></li>
              <li class="d-flex dropdown-item justify-content-between">
                <p>Product Name</p>
                <p>Price</p>
              </li>
              <li class="d-flex dropdown-item justify-content-between">
                <p>Product Name</p>
                <p>Price</p>
              </li>
              <li class="dropdown-divider"></li>
              <div class="d-flex dropdown-item justify-content-end">
                <p>Price</p>
              </div>

              <a href="<?= BASEURL ?>/cart" class="btn btn-info text-white m-2" style="width: 95%;">Checkout</a>
            </div>
          </ul>
          <a class="btn btn-outline-dark me-2" href="<?= BASEURL ?>/auth/logout" role="button">
            <i class="bi-box-arrow-right me-1"></i>
            Logout
          </a>
        </form>
      </div>
    </div>
  </nav>
  