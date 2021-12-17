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
                                    <h3 class="panel-title">Halaman Detail Konfirmasi</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <table id="datatable" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Produk ID</th>
                                                        <th>Product Name</th>
                                                        <th>Qty</th>
                                                        <th>Price</th>
                                                        <th>Subtotal</th>
                                                    </tr>
                                                </thead>


                                                <tbody>
                                                    <?php
                                                    $total = 0;
                                                    foreach ($invoices as $invoices) :
                                                        $subtotal = $invoices->qty * $invoices->price;
                                                        $total += $subtotal;
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $invoices->product_id; ?></td>
                                                            <td><?php echo $invoices->product_name; ?></td>
                                                            <td><?php echo $invoices->qty; ?></td>
                                                            <td><?php echo number_format($invoices->price, 0, ',', '.'); ?></td>
                                                            <td><?php echo number_format($subtotal, 0, ',', '.'); ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="4" align="right">Total</td>
                                                        <td><?php echo number_format($total, 0, ',', '.'); ?></td>
                                                    </tr>
                                                </tfoot>
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