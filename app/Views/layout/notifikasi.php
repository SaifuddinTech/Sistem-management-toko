  <?php if (session()->has('success')) : ?>
    <div class="card-body">
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <h4 class="alert-heading">Berhasill !</h4>
        <?= session('success') ?>
      </div>
    </div>
  <?php endif ?>

  <?php if (session()->has('error')) : ?>
    <div class="card-body">
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <h4 class="alert-heading">Maaf Ada Kesalahan !</h4>
        <?= session('error') ?>
      </div>
    </div>
  <?php endif ?>

  <?php if (session()->has('errors')) : ?>
    <div class="card-body">
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <h4 class="alert-heading">Maaf Ada Beberapa Kesalahan !</h4>
          <ul class="">
            <?php foreach (session('errors') as $error) : ?>
              <li>
                <?= $error ?>
              </li>
            <?php endforeach ?>
          </ul>
      </div>
    </div>
  <?php endif ?>