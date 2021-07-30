<!-- NAV UMUM -->
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid px-4 px-lg-5">
      <!-- logo toko -->
      <a class="navbar-brand" href="<?= BASEURL ?>">
        <img src="<?= BASEURL ?>/images/maestro.jpeg" width="200px" alt="" class="rounded">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
          <li class="nav-item"><a class="nav-link" aria-current="page" href="<?= BASEURL ?>/home">Home</a></li>
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
        <form class="d-flex">
          <a class="btn btn-outline-dark me-2" href="<?= BASEURL ?>/cart" role="button">
            <i class="bi-cart-fill me-1"></i>
            Cart
            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
          </a>
          <a class="btn btn-outline-dark me-2" href="<?= BASEURL ?>/auth/login" role="button">
            <i class="bi bi-box-arrow-left me-1"></i>
            Sign In
          </a>
        </form>
      </div>
    </div>
  </nav>
  