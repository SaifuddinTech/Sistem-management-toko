<?= $this -> extend('layout/layout_page')?>

<?= $this -> Section('content') ?>

<!-- modal untuk tambah user -->
<div class="modal fade" id="tambahdataUser" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" action="<?= site_url('user/tambah'); ?>" method="post" accept-charset="UTF-8" onsubmit="simpanButton.disabled = true; return true;">
            <?= csrf_field() ?>
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Tambah Data User Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <div class="row">
                    <div class="col mb-3">
                        <label for="fullname" class="form-label">Fullname</label>
                        <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Masukkan Fullname" />
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" />
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0 form-password-toggle">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-group input-group-merge">
                          <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="basic-default-password" />
                          <span class="input-group-text cursor-pointer" id="basic-default-password"><i class="bx bx-hide"></i></span>
                        </div>
                      </div>
                
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary" name="simpanButton">Save</button>
            </div>
        </form>
    </div>
</div>
<!-- modal untuk tambah user -->


<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header"> </h5>
        <?= view('App\Views\layout\notifikasi') ?>
        <div class=" card-header dt-action-buttons text-end pt-3 pt-md-0">
            <div style="text-align: right; padding-bottom: 10px;">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdataUser">
                <span>
                    <i class="bx bx-plus me-sm-1"></i>
                    <span class="d-none d-sm-inline-block">Tambah User Baru</span>
                </span>
                </button>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">NO</th>
                        <th class="text-center">ID User</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Fullname</th>
                        <th class="text-center">AKSI</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0 ">
                    <?php foreach ($datauser as $key=>$user) : ?>
                    <tr class="text-center">
                        <td>
                            <?= $key+1; ?>
                        </td>
                        <td><span class="center">
                                <?= $user['id_user']; ?>
                            </span></td>
                        <td>
                            <i class="fab fa-angular fa-lg text-danger"></i>
                            <span class="fw-medium">
                                <?= $user['username']; ?>
                            </span>
                        </td>
                        <td>
                            <i class="fab fa-angular fa-lg text-danger"></i>
                            <span class="fw-medium">
                                <?= $user['fullname']; ?>
                            </span>
                        </td>

                        <td>
                            <div class="demo-inline">
                                <!-- Button Delete -->
                                <a type="button" class="btn btn-sm btn-outline-danger" href="<?=base_url('user/delete/')?><?= $user['id_user']?>">
                                    <i class="bx bx-trash me-1"></i>
                                    Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
</div>

<?= $this -> endSection('') ?>