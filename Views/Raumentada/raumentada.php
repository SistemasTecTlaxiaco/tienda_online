<?php
    headerTienda($data);
?>
<br><br><br>
<div class="menu-desktop">
	<ul class="main-menu">
		<li class="active-menu">
        <img src="<?=media().'/images/teclado.jpg'?>"  height="400px" width="400px"/>
			<a href="<?= base_url(); ?>">Teclado</a>
		</li>

		<li>
        <img src="<?=media().'/images/laptop.jpg'?>" height="400px" width="400px"/>
		    <a href="<?= base_url(); ?>/tienda">Laptop</a>
		</li>

		<li>
        <img src="<?=media().'/images/bocinas.jpg'?>" height="400px" width="400px"/>
			<a href="<?= base_url(); ?>/carrito">Bocinas</a>
		</li>
	</ul>
</div>

<?php 
	footerTienda($data);
?>