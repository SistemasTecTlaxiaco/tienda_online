<?php 
	$cliente = $data['cliente'];
	$orden = $data['orden'];
	$detalle = $data['detalle'];
 ?>
<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Factura</title>
	<style>
		table{
			width: 100%;
		}
		table td, table th{
			font-size: 12px;
		}
		h4{
			margin-bottom: 0px;
		}
		.text-center{
			text-align: center;
		}
		.text-right{
			text-align: right;
		}
		.wd33{
			width: 33.33%;
		}
		
	</style>
</head>
<body>
	<table class="tbl-hader">
		<tbody>
			<tr>
				<td class="wd33">
					<img src="<?= media() ?>/tienda/images/logo.png" alt="Logo">
				</td>
				<td class="text-center wd33">
					<h4><strong><?= NOMBRE_EMPESA ?></strong></h4>
					<p><?= DIRECCION ?> <br>
					Teléfono: <?= TELEMPRESA ?> <br>
					Email: <?= EMAIL_EMPRESA  ?></p>
				</td>
				<td class="text-right wd33">
						Método Pago: 
						Transacción: 
						Método Pago: Pago contra entrega <br>
						Tipo Pago:
						

				</td>
			</tr>
		</tbody>
	</table>
	<br>
	<table class="tbl-cliente">
		<tbody>
			<tr>
				<td class="wd10">NIT:</td>
				<td class="wd10">Teléfono:</td>
			</tr>
			<tr>
				<td>Nombre:</td>
				
				<td>Dirección:</td>
				
			</tr>
		</tbody>
	</table>
	<br>
	<table class="tbl-detalle">
		<thead>
			<tr>
				<th class="wd55">Descripción</th>
				<th class="wd15 text-right">Precio</th>
				<th class="wd15 text-center">Cantidad</th>
				<th class="wd15 text-right">Importe</th>
			</tr>
		</thead>
		<tbody>

		</tbody>
		<tfoot>
			<tr>
				<td colspan="3" >Subtotal:</td>
			</tr>
			<tr>
				<td colspan="3" >Envío:</td>
				
			</tr>
			<tr>
				<td colspan="3" >Total:</td>
			</tr>
		</tfoot>
	</table>
	<div class="text-center">
		<p>Si tienes preguntas sobre tu pedido, <br> pongase en contacto con nombre, teléfono y Email</p>
		<h4>¡Gracias por tu compra!</h4>
	</div>
</body>
</html>