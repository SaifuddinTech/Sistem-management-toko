<?= $this -> extend('layout/layout_page')?>

<?= $this -> Section('content') ?>

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Data Orang Yang Service</h5>
        <div class=" card-header dt-action-buttons text-end pt-3 pt-md-0">
            <button class="dt-button create-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0"
                type="button">
                <span><i class="bx bx-plus me-sm-1"></i>
                    <span class="d-none d-sm-inline-block">Tambah Data Service Baru</span>
                </span>
            </button>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>NAMA BARANG</th>
                        <th>NAMA PEMBELI</th>
                        <th>PEMBAYARAN</th>
                        <th>STATUS</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>
                            <i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <span class="fw-medium">ROG Zephyrus Duo 16 (GX650)</span>
                        </td>
                        <td>Rifki</td>
                        <td>
                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                <li class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="<?= base_url('assets/img/icons/unicons/paypal.png')?>" alt="User" class="rounded" />
                                    </div>
                                    <div
                                        class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">PayPal</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                        <td><span class="badge bg-label-primary me-1">Proses</span></td>
                        <td>
                            <div class="demo-inline">
                                <!-- Button Edit -->
                                    <a type="button" class="btn btn-sm btn-outline-success" href="#">
                                        <i class="bx bx-edit-alt me-1"></i>
                                        Edit
                                    </a>
                                <!-- Button Delete -->
                                    <a type="button" class="btn btn-sm btn-outline-danger" href="#">
                                        <i class="bx bx-trash me-1"></i>
                                        Delete
                                    </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <span class="fw-medium">Zenbook 17 Fold OLED (X9702)</span>
                        </td>
                        <td>Royan</td>
                        <td>
                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                <li class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="<?= base_url('assets/img/icons/unicons/wallet.png')?>" alt="User" class="rounded" />
                                    </div>
                                    <div
                                        class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Via Bank</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                        <td><span class="badge bg-label-success me-1">Selesai</span></td>
                        <td>
                            <div class="demo-inline">
                                <!-- Button Edit -->
                                    <a type="button" class="btn btn-sm btn-outline-success" href="#">
                                        <i class="bx bx-edit-alt me-1"></i>
                                        Edit
                                    </a>
                                <!-- Button Delete -->
                                    <a type="button" class="btn btn-sm btn-outline-danger" href="#">
                                        <i class="bx bx-trash me-1"></i>
                                        Delete
                                    </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <span class="fw-medium">ROG Phone 6 Pro</span>
                        </td>
                        <td>Putri</td>
                        <td>
                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                <li class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="<?= base_url('assets/img/icons/unicons/chart.png')?>" alt="User" class="rounded" />
                                    </div>
                                    <div
                                        class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Bayar Di Tempat</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                        <td><span class="badge bg-label-primary me-1">Proses</span></td>
                        <td>
                            <div class="demo-inline">
                                <!-- Button Edit -->
                                    <a type="button" class="btn btn-sm btn-outline-success" href="#">
                                        <i class="bx bx-edit-alt me-1"></i>
                                        Edit
                                    </a>
                                <!-- Button Delete -->
                                    <a type="button" class="btn btn-sm btn-outline-danger" href="#">
                                        <i class="bx bx-trash me-1"></i>
                                        Delete
                                    </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <span class="fw-medium">Zenfone 10</span>
                        </td>
                        <td>Luki</td>
                        <td>
                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                <li class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="<?= base_url('assets/img/icons/unicons/wallet.png')?>" alt="User" class="rounded" />
                                    </div>
                                    <div
                                        class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Via Bank</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                        <td><span class="badge bg-label-danger me-1">Di Tunda</span></td>
                        <td>
                            <div class="demo-inline">
                                <!-- Button Edit -->
                                    <a type="button" class="btn btn-sm btn-outline-success" href="#">
                                        <i class="bx bx-edit-alt me-1"></i>
                                        Edit
                                    </a>
                                <!-- Button Delete -->
                                    <a type="button" class="btn btn-sm btn-outline-danger" href="#">
                                        <i class="bx bx-trash me-1"></i>
                                        Delete
                                    </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
</div>


<?= $this -> endSection('') ?>