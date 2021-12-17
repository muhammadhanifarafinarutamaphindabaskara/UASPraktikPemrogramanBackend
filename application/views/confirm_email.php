<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('header'); ?>
</head>

<body>
	<div id="header">
		<div class="container">
			<div id="welcomeLine" class="row">
				<div class="span6">Welcome!<strong> User</strong></div>
				<div class="span6">
					<div class="pull-right">

						<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ <?php echo $this->cart->total_items(); ?> ] Itemes in your cart </span> </a>
					</div>
				</div>
			</div>
			<!-- Navbar ================================================== -->
			<?php $this->load->view('navbar'); ?>
		</div>
	</div>
	<!-- Header End====================================================================== -->

	<div id="mainBody">
		<div class="container">
			<div class="row">
				<!-- Sidebar ================================================== -->
				<?php $this->load->view('sidebar'); ?>
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
								<h5>HARAP ISI BIODATA</h5><br />
								Gunakan No Handphone yang valid untuk pemberitahuan<br /><br /><br />
								<form action="<?php echo site_url('Produk/prosestransaksi'); ?>" method="post">
									<div class="input">
										<input type="text" type="name" name="nama" id="inputEmail0" placeholder="Nama Lengkap" class="input_field" required />
										<label for="inputEmail0" class="input_label"></label>
									</div>
									<div class="input">
										<input type="text" placeholder="No. Handphone" name="nope" id="inputEmail0" class="input_field" required />
										<label class="input_label" for="inputEmail0" type="number"></label>
									</div>
									<div class="input">
										<textarea  name="alamat" placeholder="Alamat Lengkap" class="input_field" class="span3"></textarea>
										<label for="inputEmail0" class="input_label"></label>
										<span class="input_eye">
										</span>
									</div>
									<div class="controls">
										<button type="submit" class="btn block">Submit</button>
									</div>
								</form>
							</div>
						</div>
						<div class="span1"> &nbsp;</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Footer ================================================================== -->
	<?php $this->load->view('footer');?>