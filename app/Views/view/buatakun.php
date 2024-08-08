<?= $this -> extend('layout/layout_login')?>

<?= $this -> Section('content')?>
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="#" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">
                <img src="<?= base_url('assets/img/Logo.png')?>" class="logo_brand_img" style="max-height: 4rem" alt="main_logo">
              </span>
              <span class="app-brand-text demo text-body fw-bold">fad store</span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">Welcome to Admin fad store 👋</h4>
          <p class="mb-4">Silahkan Masuk Ke Akun Anda </p>

          <?= view('App\Views\layout\notifikasi')?>

          <form method="post" action="<?= site_url('user/tambah'); ?>" class="mb-3" >
            <?= csrf_field() ?>
            <div class="mb-3">
              <label for="username" class="form-label">Email or Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your email or username" autofocus/>
            </div>
            <div class="mb-3">
              <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter your email or username" autofocus/>
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>
              </div>
              <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Daftar</button>
            </div>
          </form>
          <p class="text-center">
            <span> Kembali Ke Halaman </span>
            <a href="login">
              <span>login</span>
            </a>
          </p>
        </div>
      </div>
      <!-- /Register -->
    </div>
  </div>
</div>

<?= $this -> endSection('')?>