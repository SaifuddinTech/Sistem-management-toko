<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
  data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>
    <?= $data['title']?>
  </title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/Logo.png') ?>" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="<?= base_url('assets/vendor/fonts/boxicons.css') ?>" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/css/core.css') ?>" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?= base_url('assets/vendor/css/theme-default.css') ?>" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?= base_url('assets/css/demo.css') ?>" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/vendor/libs/apex-charts/apex-charts.css') ?>" />


  <!-- Helpers -->
  <script src="<?= base_url('assets/vendor/js/helpers.js') ?>"></script>
  <script src="<?= base_url('assets/js/config.js') ?>"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="<?= base_url('dashboard')?>" class="app-brand-link">
            <img src="<?= base_url('assets/img/Logo.png') ?>" class="logo_brand_img" style="max-height: 4rem" alt="main_logo">
            <span class="app-brand-text demo menu-text fw-bold ms-2">Fad Store</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>


        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-4">
          <!-- Dashboards -->
          <li class="menu-item">
            <a href="<?= base_url('dashboard')?>" class="menu-link">
              <i class='menu-icon tf-icons bx bxs-dashboard bx-sm'></i>
              <div data-i18n="Dashboards">Dashboards</div>
            </a>
          </li>

          <!-- Layouts -->
          <li class="menu-item">
            <a href="<?= base_url('laptop')?>" class="menu-link">
              <i class="menu-icon tf-icons bx bx-laptop bx-sm"></i>
              <div data-i18n="Laptop">Laptop</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="<?= base_url('phone')?>" class="menu-link">
              <i class="menu-icon tf-icons bx bx-mobile-alt bx-sm"></i>
              <div data-i18n="Phone">Phone</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="<?= base_url('order')?>" class="menu-link">
              <i class="menu-icon tf-icons bx bx-cart-add bx-sm"></i>
              <div data-i18n="Order">Order</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="<?= base_url('service')?>" class="menu-link">
              <i class="menu-icon tf-icons bx bx-extension bx-sm"></i>
              <div data-i18n="Service">Service & Perbaikan</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="<?= base_url('rekap')?>" class="menu-link">
              <i class="menu-icon tf-icons bx bx-detail bx-sm"></i>
              <div data-i18n="Rekap">Rekap Data</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="<?= base_url('karyawan')?>" class="menu-link">
              <i class="menu-icon tf-icons bx bx-male-female bx-sm"></i>
              <div data-i18n="Karyawan">Data Karyawan</div>
            </a>
          </li>
          <!-- Misc -->
          <li class="menu-header small text-uppercase"><span class="menu-header-text">Profile</span></li>
          <li class="menu-item">
            <a href="https://s.id/info-fst" target="_blank" class="menu-link">
              <i class="menu-icon tf-icons bx bx-support bx-sm"></i>
              <div data-i18n="Support">Support</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="https://www.instagram.com/n.saifuddinnn/" target="_blank" class="menu-link">
              <i class="menu-icon tf-icons bx bx-file bx-sm"></i>
              <div data-i18n="Documentation">Documentation</div>
            </a>
          </li>
        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout content -->
      <div class="layout-page">
        <!-- Navbar -->
        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <h4 class="font-weight text-primary -bolder mb-0">
                  <?= $data['menu']?>
                </h4>
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li class="nav-item lh-1 me-3 btn btn-sm btn-outline-secondary">
                <div class="navbar-nav align-items-center">
                  <div class="nav-item d-flex align-items-center">
                    <i class="bx bx-search fs-4 lh-0"></i>
                    <input type="text" class="form-control border-0 shadow-none ps-1 ps-sm-2" placeholder="Search..."
                      aria-label="Search..." />
                  </div>
                </div>
              </li>

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="<?= base_url('assets/img/avatars/8.png') ?>" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="<?= base_url('assets/img/avatars/8.png') ?>" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-medium d-block">Nur Saifuddin</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-cog me-2"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="user">
                      <i class="menu-icon tf-icons bx bx-file"></i>
                      <span class="align-middle">Data User</span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="logout">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">

          <!-- memanggil content -->
          <?= $this -> renderSection('content') ?>
          <!-- memanggil content -->

          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
              <div class="mb-2 mb-md-0">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                ||
                <a href="https://www.instagram.com/n.saifuddinnn/" target="_blank" class="footer-link fw-medium">Nur
                  Saifuddin</a>
              </div>
              <div class="d-none d-lg-inline-block">
                <a href="https://www.instagram.com/n.saifuddinnn/" target="_blank"
                  class="footer-link me-4">Documentation</a>

                <a href="https://s.id/info-fst" target="_blank" class="footer-link me-4">Support</a>
                <a href="logout" class="btn btn-sm btn-outline-danger">
                  <i class="bx bx-log-out-circle me-1"></i>Logout</a>
              </div>
            </div>
          </footer>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>

        </div>
        <!-- Content wrapper -->

      </div>
      <!-- / Layout content -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

  </div>
  <!-- / Layout wrapper -->


  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="<?= base_url('assets/vendor/libs/jquery/jquery.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/libs/popper/popper.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/js/bootstrap.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/js/menu.js') ?>"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="<?= base_url('assets/vendor/libs/apex-charts/apexcharts.js') ?>"></script>

  <!-- Main JS -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>

  <!-- Page JS -->
  <script src="<?= base_url('assets/js/dashboards-analytics.js') ?>"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>