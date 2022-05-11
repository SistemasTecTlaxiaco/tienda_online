<?php
    headerTienda($data);
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<script nomodule="" src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
<style>
	#modelViewer{
		width: 300px;
		height: 300px;
		margin: 0 auto;
	}
	a{
		font-family: "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
		font-size: 30px;
		color: black;
	}
</style>
</head>

<br><br><br>
<div class="w3-row-padding">
<br><br><br>
	<div class="w3-third">
		<a href="<?= base_url().'/Views/Raumentada/teclado.php' ?>">
		<model-viewer id="modelViewer" alt="Bocina" src="<?=media().'/modelos/teclado.glb'?>" ar ar-modes="webxr scene-viewer quick-look" 
		seamless-poster shadow-intensity="1" camera-controls autoplay></model-viewer></a><br>
		<a href="<?= base_url().'/Views/Raumentada/teclado.php' ?>">Teclado</a>
	</div>

	<div class="w3-third">
		<a href="<?= base_url().'/Views/Raumentada/laptop.php' ?>">
		<model-viewer id="modelViewer" alt="laptop" src="<?=media().'/modelos/laptop.glb'?>" ar ar-modes="webxr scene-viewer quick-look" 
		seamless-poster shadow-intensity="1" camera-controls autoplay></model-viewer></a><br>
		<a href="<?= base_url().'/Views/Raumentada/laptop.php' ?>">Laptop</a>
	</div>

	<div class="w3-third">
	<a href="<?= base_url().'/Views/Raumentada/bocina.php' ?>">
		<model-viewer id="modelViewer" alt="Bocina" src="<?=media().'/modelos/Bocina.glb'?>" ar ar-modes="webxr scene-viewer quick-look" 
		seamless-poster shadow-intensity="1" camera-controls autoplay></model-viewer></a><br>
		<a href="<?= base_url().'/Views/Raumentada/bocina.php' ?>">Bocinas</a>
	</div>
</div>
<br><br><br><br><br>

<?php 
	footerTienda($data);
?>