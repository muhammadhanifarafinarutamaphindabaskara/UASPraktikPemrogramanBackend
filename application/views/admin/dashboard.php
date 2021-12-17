<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-tachometer-alt"></i> Dashboard
  </div>
  <link rel="stylesheet" href="<?php echo base_url('assets/css2/morris.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css2/kotak.css') ?>">

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Selamat Datang!! <?php echo $this->session->userdata('nama'); ?></h4>
    <p>Selamat Datang di Halaman Admin Sistem Informasi Penjualan Kepunyaan Mahasiswa
    </p>
    <hr>
  </div>
  <?php
   foreach ($sum_harga as $s){
  ?>
  <div class="row">
    <div class="col-md-6 col-lg-3">
      <div class="kotak"><i class="icon fa fa-money-bill-wave"></i>
        <div class="info">
          <h7>Total Penghasilan Penjualan</h7>
          <p><b><?php echo "Rp " . number_format($s['total_harga'],2,',','.'); ?></b></p>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>
  <div id="myChart2" style="width:100%; max-width:600px; height:500px;">
    <script src="<?php echo base_url('assets/js2/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js2/raphael-min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js2/morris.min.js') ?>"></script>
    <script>
      google.charts.load('current', {
        'packages': ['corechart']
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['kategori', 'harga'],
          <?php
          foreach ($chart_data as $d) {
            echo "['" . $d["kategori"] . "', " . $d["harga"] . "],";
          }
          ?>
        ]);

        var options = {
          title: 'Stok Barang dan Produk yang tersedia'
        };

        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);
      }
    </script>