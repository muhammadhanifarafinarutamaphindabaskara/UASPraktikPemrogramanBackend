<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('header');?>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong> User</strong></div>
	<div class="span6">
	<div class="pull-right">
		
		<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ <?php echo $this->cart->total_items();?> ] Itemes in your cart </span> </a> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<?php $this->load->view('navbar');?>
</div>
</div>
<!-- Header End====================================================================== -->

<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
<?php $this->load->view('sidebar');?>
<!-- Sidebar end=============================================== -->
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li><a href="index.html">Keranjang</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
    </ul>
	<div class="row">
		<div class="span4 offset2">
			<div class="well">
			<h5>Konfirmasi Pembayaran</h5><br/>
			<?php echo form_open_multipart('Produk/proses_konfirmasi');?>
			  <div class="control-group">
				<label class="control-label" for="inputEmail0">Masukkan Kode Pesanan</label>
				<div class="controls">
				  <input name="invoice_id" class="span3"  type="name" id="inputEmail0" placeholder="">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputEmail0">Upload Bukti Transfer</label>
				<div class="controls">
				  <input type="file" class="form-control" name="userfile">
				</div>
			  </div>
			  <div class="controls">
			  <button type="submit" class="btn block">Konfirmasi</button>
			  </div>
			<?php echo form_close();?>
		</div>
		</div>
		<div class="span1"> &nbsp;</div>
	</div>	
	
</div>
</div></div>
</div>

<!-- Footer ================================================================== -->
<?php $this->load->view('footer');?>