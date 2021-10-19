<?= $this->extend('admin/template-admin'); ?>

<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="callout callout-success">
      <h5 style="font-weight: bold;">Selamat Datang!</h5>
      Halaman ini merupakan halaman admin web UKM Bahasa PNUP. Sementara halaman ini masih dalam pengembangan, apabila terdapat kendala dalam pengoperasiannya, silahkan hubungi pengembang dari halaman web ini. Terimkasih
    </div>

    <!-- DONUT CHART -->
    <!-- /.card -->
    <div class="container">
      <div class="row">

        <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">Diagram Kelulusan</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas><br>
            <!-- <div class="row"> -->
            <div class="col-md-3 offset-md-10">
              <button type="button" class="btn btn-outline-info btn-xs btn-right" onclick="document.location = '<?= base_url('/'); ?>/Bahasa/kelulusan'">More Detail</button>
            </div>
            <!-- </div> -->
          </div>
          <!-- /.card-body -->
        </div>
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?= $totalPeserta; ?></h3>
              <p>Jumlah Pendaftar</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-plus"></i>
            </div>
            <a href="<?= base_url('/Bahasa/peserta'); ?>" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
</section>
<!-- /.content -->
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script>
  //-------------
  //- DONUT CHART -
  //-------------
  // Get context with jQuery - using jQuery's .get() method.
  var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
  var donutData = {
    labels: [
      'LULUS',
      'TIDAK LULUS',
    ],
    datasets: [{
      data: [<?= $lulus; ?>, <?= $tidakLulus; ?>],
      backgroundColor: ['#00a65a', '#f56954'],
    }]
  }
  var donutOptions = {
    maintainAspectRatio: false,
    responsive: true,
  }
  //Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  var donutChart = new Chart(donutChartCanvas, {
    type: 'doughnut',
    data: donutData,
    options: donutOptions
  })
</script>
<?= $this->endSection(); ?>