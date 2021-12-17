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
                                    <h3 class="panel-title">Halaman Daftar Produk</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <table id="datatable" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Kategori</th>
                                                        <th>Brand</th>
                                                        <th>Model</th>
                                                        <th>Dimensi</th>
                                                        <th>Harga</th>
                                                        <th>Gambar</th>
                                                        <th><a href="<?php echo site_url('admin/tambahproduk'); ?>">Tambah Barang</a></th>
                                                    </tr>
                                                </thead>


                                                <tbody>
                                                    <?php foreach ($produk as $produk) : ?>
                                                        <tr>
                                                            <td><?php echo $produk->kategori; ?></td>
                                                            <td><?php echo $produk->brand; ?></td>
                                                            <td><?php echo $produk->model; ?></td>
                                                            <td><?php echo $produk->dimensi; ?></td>
                                                            <td><?php echo $produk->harga; ?></td>
                                                            <td>
                                                                <?php
                                                                $product_image = [
                                                                    'src' => 'uploads/' . $produk->gambar,
                                                                    'width' => '100',
                                                                    'height' => '100'
                                                                ];
                                                                echo img($product_image);
                                                                ?>
                                                            </td>
                                                            <td><a href="<?php echo site_url('admin/editproduk/' . $produk->id); ?>">Edit</a> | <a href="<?php echo site_url('admin/hapusproduk/' . $produk->id); ?>">Hapus</a></td>
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

    <!-- jQuery  -->



    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').dataTable();
        });
    </script>


</body>

</html>