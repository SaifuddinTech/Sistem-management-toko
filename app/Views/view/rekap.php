<?= $this -> extend('layout/layout_page')?>

<?= $this -> Section('content') ?>

<html>

<head>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
  <style>
    .dt-buttons {
      padding-left: 24px;
      padding-bottom: 15px;
    }

    .navbartable {
      margin-bottom: 50px;
      padding-top: 20px;
    }

    .namatable {
      margin: 0rem;
    }

    .dataTables_filter {
      padding-right: 24px;
      padding-bottom: 15px;
    }

    .card-header {
      margin-bottom: 30px;
    }

    #example_paginate {
      margin-right: 9px;
      margin-top: 10px;
      margin-bottom: 10px;
    }

    #example_info {
      margin-left: 24px;
      margin-top: 10px;
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Bootstrap Table -->
    <div class="card">
      <div class="navbartable navbar navbar-example navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand"> <h5 class=namatable>Rekap Data</h5></a>
          <div class="collapse navbar-collapse" id="navbar-ex-3">
            <div class="navbar-nav me-auto">
            </div>
            <a class="dt-button create-new btn btn-primary" href="<?= base_url('rekap_tambah/')?>" tabindex="0"
              aria-controls="DataTables_Table_0" type="button">
              <span>
                <i class="bx bx-plus me-sm-1"></i>
                <span class="d-none d-sm-inline-block">Tambah Data Baru</span>
              </span>
            </a>
          </div>
        </div>
      </div>

      <div class="table-responsive text-nowrap">
        <table id="example" class="table">
          <thead>
            <th>NO</th>
            <th>KETERANGAN</th>
            <th>NOMINAL</th>
            <th>PEMBAYARAN</th>
            <th>PENANGGUNG JAWAB</th>
            <th>AKSI</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($datarekap as $key=>$dr):?>
            <tr>
              <th>
                <?= $key+1;?>
              </th>
              <td>
                <?= $dr['ket'];?>
              </td>
              <td>
                Rp. <?= $dr['nomin'];?>
              </td>
              <td>
                <?= $dr['pemba'];?>
              </td>
              <td>
                <?= $dr['penja'];?>
              </td>
              <td>
                <div class="demo-inline">
                  <!-- Button Edit -->
                  <a type="button" class="btn btn-sm btn-outline-success me-1" href="<?= base_url('rekap/edit/')?><?= $dr['id_rekap'];?>">
                    <i class="bx bxs-edit-alt"></i>
                  </a>
                  <!-- Button Delete -->
                  <a type="button" class="btn btn-sm btn-outline-danger" href="<?=base_url('rekap/delete/')?><?= $dr['id_rekap'];?>">
                    <i class="bx bxs-trash"></i>
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



  <!-- Core JS -->
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
  <script>
    $('#example').DataTable({
      dom: 'Bfrtip',
      buttons: ['copy', 'excel', 'pdf', 'print'],
    });
  </script>
</body>

</html>
<!-- End Section -->
<?= $this->endSection() ?>