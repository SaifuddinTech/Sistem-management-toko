<?= $this -> extend('layout/layout_page')?>

<?= $this -> Section('content') ?>

    
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0"> Tambah Data Karywan</h5>
                <a type="button" href="karyawan" class="btn btn-outline-secondary">Kembali</a>
            </div>
            <!-- Notifikasi -->
            <div class="mx-12">
                <?= view('App\Views\layout\notifikasi') ?>
            </div>
            
            <!-- Notifikasi -->
            <div class="card-body">
                <form method="post" action="<?= site_url('/karyawan/save'); ?>">
                    <?= csrf_field();?>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="nama">Nama Karyawan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Karyawan" autofocus />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="posisi"> Posis </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="posisi" placeholder=" Posis" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="status">Status</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="status" placeholder="Status" />
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary"> Simpan </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this -> endSection('') ?>