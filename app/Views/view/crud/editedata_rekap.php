<?= $this -> extend('layout/layout_page')?>

<?= $this -> Section('content') ?>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Tambah Data Rekap</h5>
                <a type="button" href="<?= base_url('rekap')?>" class="btn btn-outline-secondary">Kembali</a>
            </div>
            <!-- Notifikasi -->
            <div class="mx-12">
                <?= view('App\Views\layout\notifikasi') ?>
            </div>
            <div class="card-body">
                <form  method="post" action="<?= site_url('rekap/update/'); ?><?= $datarekap['id_rekap'];?>">
                    <?= csrf_field();?>
                    <div class="mb-3">
                        <label class="form-label" for="ket">KETERANGAN</label>
                        <input type="text" class="form-control" name="ket" placeholder="Nama Kebutuhan" value="<?= $datarekap['ket'];?>" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="nomin">NOMINAL</label>
                        <input type="text" class="form-control" name="nomin" placeholder="Nominal" value="<?= $datarekap['nomin'];?>" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="pemba">PEMBAYARAN</label>
                        <input type="text" class="form-control" name="pemba" placeholder="Pembayaran" value="<?= $datarekap['pemba'];?>" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="penja">PENANGGUNG JAWAB</label>
                        <input type="text" class="form-control" name="penja" placeholder="Penanggung Jawab" value="<?= $datarekap['penja'];?>" />
                    </div>

                    <!-- Tombol Simpan -->
                    <button type="submit" class="btn btn-primary"> Simpan </button>
                
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this -> endSection('') ?>