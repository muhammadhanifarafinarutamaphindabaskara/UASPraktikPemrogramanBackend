	<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="<?php echo site_url('produk/cart'); ?>"><img src="<?php echo base_url('assets/bootshop/themes/images/ico-cart.png'); ?>" alt="cart"><?php echo $this->cart->total_items(); ?> Items in your cart </a></div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li><a href="<?php echo site_url('produk/kategori/Buku'); ?>">Buku</a></li>
			<li><a href="<?php echo site_url('produk/kategori/Pulpen'); ?>">Pulpen</a></li>
			<li><a href="<?php echo site_url('produk/kategori/Pensil'); ?>">Pensil</a></li>
			<li><a href="<?php echo site_url('produk/kategori/Kotak_Pensil'); ?>">Kotak Pensil</a></li>
			<li><a href="<?php echo site_url('produk/kategori/Tas'); ?>">Tas</a></li>
		</ul>
		<br />
	</div>