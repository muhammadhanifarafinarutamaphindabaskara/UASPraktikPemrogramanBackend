<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper pl-3">

        <!-- Top Bar Start -->
        <?php $this->load->view('admin/top_menu'); ?>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <?php $this->load->view('admin/sidebar'); ?>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="panel panel-default ml-5">
            <div class="panel-heading">
                <h3 class="panel-title">Form Tambah Barang</h3>
            </div>
            <div class="panel-body">
                <?php echo form_open_multipart('admin/proses_tambah_produk', ['class' => 'form-horizontal', 'role' => 'form']); ?>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Kategori</label>
                    <div class="col-sm-9">
                        <select name="kategori" class="select2" data-placeholder="Choose a Country...">
                            <option value="#">&nbsp;</option>
                            <option value="Buku">Buku</option>
                            <option value="Pulpen">Pulpen</option>
                            <option value="Pensil">Pensil</option>
                            <option value="Kotak_Pensil">Kotak_Pensil</option>
                            <option value="Tas">Tas</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Brand</label>
                    <div class="col-sm-9">
                        <input type="text" name="brand" class="form-control" placeholder="Brand">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Model</label>
                    <div class="col-sm-9">
                        <input type="text" name="model" class="form-control" placeholder="Model">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Dimensi</label>
                    <div class="col-sm-9">
                        <input type="text" name="dimensi" class="form-control" placeholder="Dimensi">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Harga</label>
                    <div class="col-sm-9">
                        <input type="text" name="harga" class="form-control" placeholder="Harga, Mis : 750000">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Gambar</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name="userfile">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Masukkan keterangan produk</h3>
                        </div>
                        <div class="panel-body">
                            <textarea class="ckeditor" id="editor-custom" name="keterangan"></textarea><br><br>
                        </div>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Tambah</button>
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
    <script>
        var resizefunc = [];
    </script>
    <script src="<?php echo base_url() ?>assets/plugins/ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('editor-custom', {
            uiColor: '#537fbb'
        });
    </script>


</body>

</html>