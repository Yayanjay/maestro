<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title><?= $data['judul'] ?></title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="<?= BASEURL ?>/css/styles.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn order-1 order-lg-0 order-sm-0 me-4 me-lg-0" id="sidebarToggle" >
        <i class="fa fa-bars"></i>
    </button>
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="<?= BASEURL ?>/dashboard"><?= $data['judul'] ?></a>
    
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Menus</div>
                    <a class="nav-link" href="<?= BASEURL ?>/home">
                      <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                      Home
                    </a>


                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                      <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                      Feature
                      <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                      <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseProduct" aria-expanded="false" aria-controls="pagesCollapseProduct">
                          <i class="fas fa-boxes me-2"></i>
                          Product
                          <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseProduct" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                          <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="register.html"><i class="fas fa-shopping-basket me-2"></i></i>Barang</a>
                            <a class="nav-link" href="register.html"><i class="fas fa-tools me-2"></i>Jasa</a>
                          </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseUser" aria-expanded="false" aria-controls="pagesCollapseUser">
                          <i class="fas fa-users me-2"></i>
                          User
                          <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseUser" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                          <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?= BASEURL ?>/dashboard/costumer"><i class="fas fa-user me-2"></i>Costumer</a>
                            <a class="nav-link" href="<?= BASEURL ?>/dashboard/admin"><i class="fas fa-user-shield me-2"></i>Admin</a>
                            <a class="nav-link" href="<?= BASEURL ?>/dashboard/supplier"><i class="fas fa-portrait me-2"></i>Supplier</a>
                          </nav>
                        </div>
                        <a class="nav-link" href="#" data-bs-target="#pagesCollapseError" aria-controls="pagesCollapseError">
                          <i class="fas fa-clipboard-list me-2"></i>
                          Order
                        </a>
                      </nav>
                    </div>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <?= $data['user']['name']; ?>
            </div>
        </nav>
    </div>