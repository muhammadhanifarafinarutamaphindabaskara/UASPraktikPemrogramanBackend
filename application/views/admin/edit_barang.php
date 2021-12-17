<body>

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
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Halaman Edit Barang</h3>
                            </div>
                            <div class="panel-body">
                                <?php echo form_open_multipart('admin/proseseditproduk', ['class' => 'form-horizontal', 'role' => 'form']); ?>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Kategori</label>
                                    <div class="col-sm-9">
                                        <select name="kategori" class="select2" data-placeholder="Choose a Country...">
                                            <option value="<?php echo $produk->kategori; ?>"><?php echo $produk->kategori; ?>;</option>
                                            <option value="Camera">Camera</option>
                                            <option value="Handphone">Handphone</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Brand</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="brand" value="<?php echo $produk->brand; ?>" class="form-control" placeholder="Brand">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Model</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="model" value="<?php echo $produk->model; ?>" class="form-control" placeholder="Model">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Dimensi</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="dimensi" value="<?php echo $produk->dimensi; ?>" class="form-control" placeholder="Dimensi">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Harga</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="harga" value="<?php echo $produk->harga; ?>" class="form-control" placeholder="Harga, Mis : 750000">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Gambar</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="userfile" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Masukkan keterangan produk</h3>
                                            </div>
                                            <div class="panel-body">
                                                <textarea name="keterangan" class="wysihtml5 form-control" rows="9"><?php echo $produk->keterangan; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End row -->

                                <input type="hidden" name="id" value="<?php echo $produk->id; ?>">
                                <div class="form-group m-b-0">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Edit</button>
                                    </div>
                                </div>
                                <?php echo form_close(); ?>
                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col -->
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


    <script>
        jQuery(document).ready(function() {
            $('.wysihtml5').wysihtml5();

            $('.summernote').summernote({
                height: 200, // set editor height

                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor

                focus: true // set focus to editable area after initializing summernote
            });

        });
    </script>




</body>

</html>