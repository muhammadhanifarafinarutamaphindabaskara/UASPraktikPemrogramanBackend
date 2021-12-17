<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <?php $this->load->view('admin/top_menu'); ?>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <?php $this->load->view('admin/sidebar'); ?>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page ml-5">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Halaman Daftar Konfirmasi</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <table id="datatable" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Kode Pemesanan</th>
                                                        <th>Tanggal</th>
                                                        <th>Bukti Transfer</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>


                                                <tbody>
                                                    <?php foreach ($konfirmasi as $konfirmasi) : ?>
                                                        <tr>
                                                            <td><?php echo $konfirmasi->id; ?></td>
                                                            <td><?php echo $konfirmasi->invoice_id; ?></td>
                                                            <td><?php echo $konfirmasi->tanggal; ?></td>
                                                            <td><a href="<?php echo site_url('admin/download/' . $konfirmasi->gambar); ?>">Download Lampiran</a></td>
                                                            <td><a href="<?php echo site_url('admin/detailkonfirmasi/' . $konfirmasi->invoice_id); ?>">Detail</a></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- End Row -->

                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->



    <script>
        var resizefunc = [];
    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').dataTable();
        });
    </script>


</body>

</html>