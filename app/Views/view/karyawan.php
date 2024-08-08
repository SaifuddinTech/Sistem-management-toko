<?= $this -> extend('layout/layout_page')?>

<?= $this -> Section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header"> Nama Nama Karyawan Dan Jabatan</h5>
        <div class=" card-header dt-action-buttons text-end pt-3 pt-md-0">
            <a class="dt-button create-new btn btn-primary" href="<?= base_url('/karyawan_tambah')?>" tabindex="0" aria-controls="DataTables_Table_0"
                type="button">
                <span>
                    <i class="bx bx-plus me-sm-1"></i>
                    <span class="d-none d-sm-inline-block">Tambah Karyawan Baru</span>
                </span>
            </a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">NO</th>
                        <th class="text-center">ID KARYAWAN</th>
                        <th class="text-center">NAMA KARYAWAN</th>
                        <th class="text-center">POSISI</th>
                        <th class="text-center">STATUS</th>
                        <th class="text-center">AKSI</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0 " >
                <?php foreach ($datakaryawan as $b) : ?>
                    <tr>
                    <td class="text-center"> <?= $nomor++; ?> </td>
                        <td class="text-center"><span class="center"> <?= $b['id_karyawan']; ?></span></td>
                        <td class="text-center">
                            <i class="fab fa-angular fa-lg text-danger"></i>
                            <span class="fw-medium"> <?= $b['nama']; ?> </span>
                        </td>
                        <td class="text-center">
                            <i class="fab fa-angular fa-lg text-danger"></i>
                            <span class="fw-medium"> <?= $b['posisi']; ?> </span>
                        </td>
                        <td class="text-center"><span class="badge bg-label-primary me-1">  <?= $b['status']; ?>  </span></td>
                        <td class="text-center">
                            <div class="demo-inline">
                                <!-- Button Edit -->
                                    <a type="button" class="btn btn-sm btn-outline-success" href="<?=base_url('/karyawan_edit/')?><?= $b['id_karyawan'];?>">
                                        <i class="bx bx-edit-alt me-1"></i>
                                        Edit
                                    </a>
                                <!-- Button Delete -->
                                    <a type="button" class="btn btn-sm btn-outline-danger" href="<?=base_url('/karyawan/delete/')?><?= $b['id_karyawan'];?>">
                                        <i class="bx bx-trash me-1"></i>
                                        Delete
                                    </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
            <?= $datapager->links('karyawan','bootstrap_pagination'); ?>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
</div>

<?= $this -> endSection('') ?>