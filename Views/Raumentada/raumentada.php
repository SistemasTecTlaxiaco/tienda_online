<?php
    headerTienda($data);
?>
<br><br><br>
<div class="menu-desktop">
	<ul class="main-menu">
		<li class="active-menu">
        <a href="<?= base_url().'/Views/Raumentada/teclado.php' ?>"><<img src="<?=media().'/images/teclado.jpg'?>"  height="400px" width="400px"/></a>
			<a href="<?= base_url().'/Views/Raumentada/laptop.php' ?>">Teclado</a>
		</li>

		<li>
        <a href="<?= base_url().'/Views/Raumentada/laptop.php' ?>"><img src="<?=media().'/images/laptop.jpg'?>" height="400px" width="400px"/></a>
		    <a href="<?= base_url().'/Views/Raumentada/laptop.php' ?>">Laptop</a>
		</li>

		<li>
        <a href="<?= base_url().'/Views/Raumentada/bocina.php' ?>"><img src="<?=media().'/images/bocinas.jpg'?>" height="400px" width="400px"/></a>
		    <a href="<?= base_url().'/Views/Raumentada/bocina.php' ?>">Bocinas</a>
		</li>
	</ul>
</div>

<?php 
	footerTienda($data);
?>