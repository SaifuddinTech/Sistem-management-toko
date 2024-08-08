<?= $this -> extend('layout/layout_page')?>

<?= $this -> Section('content') ?>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Selamat Datang Nur Saifuddin 🎉</h5>
                            <p class="mb-4">
                                Semua Transaksi yang telah di lakukan oleh user terperinci di sini !!
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="<?= base_url('assets/img/illustrations/man-with-laptop-light.png')?>" height="140"
                                alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-primary"><i
                                        class="bx bx-dollar-circle"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0"> Rp. 300 jt</h4>
                        </div>
                        <p class="mb-1">Penghasilan</p>
                        <p class="mb-0">
                            <small class="text-muted">Bulan ini</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-warning h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-primary"><i
                                        class="bx bxs-truck"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">10</h4>
                        </div>
                        <p class="mb-1">Proses Di Kirim</p>
                        <p class="mb-0">
                            <small class="text-muted">Bulan ini</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-danger h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-danger"><i
                                        class="bx bx-git-repo-forked"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0">380</h4>
                        </div>
                        <p class="mb-1">Di Terima Oleh Klient</p>
                        <p class="mb-0">
                            <small class="text-muted">Bulan ini</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-info h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-info"><i
                                        class="bx bx-calendar-alt"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0"><?php date_default_timezone_set('Asia/Jakarta');
                                echo date('d-m-Y'); ?> &nbsp; &nbsp;</h4>
                        </div>
                        <p class="mb-1">Kalender</p>
                        <p class="mb-0">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Order Statistics -->
        <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Statistik Order</h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                            <a class="dropdown-item" href="#">Select All</a>
                            <a class="dropdown-item" href="#">Refresh</a>
                            <a class="dropdown-item" href="#">Share</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-column align-items-center gap-1">
                            <h2 class="mb-2">458</h2>
                            <span>Total Orders</span>
                        </div>

                        <!-- chart -->
                        <div id="apexchartsi8uvivtej"
                            class="apexcharts-canvas apexchartsi8uvivtej apexcharts-theme-light"
                            style="width: 130px; height: 137.55px;">
                            <svg id="SvgjsSvg1267" width="130" height="137.55" xmlns="http://www.w3.org/2000/svg"
                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <g id="SvgjsG1269" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(-7, 0)">
                                    <defs id="SvgjsDefs1268">
                                        <clipPath id="gridRectMaski8uvivtej">
                                            <rect id="SvgjsRect1271" width="150" height="173" x="-4.5" y="-2.5" rx="0"
                                                ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff">
                                            </rect>
                                        </clipPath>
                                        <clipPath id="forecastMaski8uvivtej"></clipPath>
                                        <clipPath id="nonForecastMaski8uvivtej">
                                        </clipPath>
                                        <clipPath id="gridRectMarkerMaski8uvivtej">
                                            <rect id="SvgjsRect1272" width="145" height="172" x="-2" y="-2" rx="0"
                                                ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff">
                                            </rect>
                                        </clipPath>
                                    </defs>
                                    <g id="SvgjsG1273" class="apexcharts-pie">
                                        <g id="SvgjsG1274" transform="translate(0, 0) scale(1)">
                                            <circle id="SvgjsCircle1275" r="44.835365853658544" cx="70.5" cy="70.5"
                                                fill="transparent">

                                            </circle>
                                            <g id="SvgjsG1276" class="apexcharts-slices">
                                                <g id="SvgjsG1277" class="apexcharts-series apexcharts-pie-series"
                                                    seriesName="Electronic" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1278"
                                                        d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z"
                                                        fill="rgba(105,108,255,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                                                        class="apexcharts-pie-area apexcharts-donut-slice-0" index="0"
                                                        j="0" data:angle="237" data:startAngle="17" data:strokeWidth="5"
                                                        data:value="85"
                                                        data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z"
                                                        stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG1281" class="apexcharts-series apexcharts-pie-series"
                                                    seriesName="Decor" rel="3" data:realIndex="2">
                                                    <path id="SvgjsPath1282"
                                                        d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z"
                                                        fill="rgba(3,195,236,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                                                        class="apexcharts-pie-area apexcharts-donut-slice-2" index="0"
                                                        j="2" data:angle="17" data:startAngle="204" data:strokeWidth="5"
                                                        data:value="50"
                                                        data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z"
                                                        stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG1283" class="apexcharts-series apexcharts-pie-series"
                                                    seriesName="Fashion" rel="4" data:realIndex="3">
                                                    <path id="SvgjsPath1284"
                                                        d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z"
                                                        fill="rgba(113,221,55,1)" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="5" stroke-dasharray="0"
                                                        class="apexcharts-pie-area apexcharts-donut-slice-3" index="0"
                                                        j="3" data:angle="204" data:startAngle="0" data:strokeWidth="5"
                                                        data:value="50"
                                                        data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z"
                                                        stroke="#ffffff"></path>
                                                </g>
                                            </g>
                                        </g>
                                        
                                    </g>
                                    <line id="SvgjsLine1288" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6"
                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1289" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0"
                                        stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">
                                    </line>
                                </g>
                                <g id="SvgjsG1270" class="apexcharts-annotations"></g>
                            </svg>
                        </div>
                        <!-- chart -->

                    </div>
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-primary"><i
                                        class="bx bx-laptop"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Laptop</h6>
                                    <small class="text-muted"></small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-medium">237</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-success"><i
                                        class="bx bx-mobile-alt"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-medium">204</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-info"><i class="bx bx-cog"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Service</h6>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-medium">17</small>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!--/ Order Statistics -->

        <!-- Expense Overview -->
        <div class="col-md-6 col-lg-4 order-1 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Statistik Order Per Tahun</h5>
                    </div>
                </div>
                <div class="card-body px-0">
                    <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                            <div class="d-flex p-4 pt-3">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="<?= base_url('assets/img/icons/unicons/wallet.png')?>" alt="User" />
                                </div>
                                <div>
                                    <small class="text-muted d-block">Total Uang</small>
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1">Rp. 1.500.000.000</h6>
                                    </div>
                                </div>
                            </div>
                            <div id="incomeChart"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Expense Overview -->

        <!-- Transactions -->
        <div class="col-md-6 col-lg-4 order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Transactions</h5>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="#">Last 28 Days</a>
                            <a class="dropdown-item" href="#">Last Month</a>
                            <a class="dropdown-item" href="#">Last Year</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="<?= base_url('assets/img/icons/unicons/wallet.png')?>" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Ovvo</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">Rp. 24.000.000</h6>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="<?= base_url('assets/img/icons/unicons/paypal.png')?>" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">PayPal</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">Rp. 17.000.000</h6>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="<?= base_url('assets/img/icons/unicons/paypal.png')?>" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">PayPal</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">Rp. 36.000.000</h6>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="<?= base_url('assets/img/icons/unicons/wallet.png')?>" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Via Bank</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">Rp. 80.000.000</h6>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="<?= base_url('assets/img/icons/unicons/chart.png')?>" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Bayar Ditempat</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">Rp. 11.000.000</h6>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Transactions -->
    </div>
</div>
<!-- / Content -->
<?= $this -> endSection('') ?>