<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Factura</title>
</head>
<body>
<table class="tbl-hader">
		<tbody>
			<tr>
                <td>
                <img src="<?= media() ?>/tienda/images/logo.png" alt="Logo">
				</td>
				<td class="text-center wd33">
					<h4><strong><?= NOMBRE_EMPESA ?></strong></h4>
					<p><?= DIRECCION ?> <br>
					Teléfono: <?= TELEMPRESA ?> <br>
					Email: <?= EMAIL_EMPRESA  ?></p>
                </td>
                <td>
                <p>No. Orden <strong>10</strong><br>
                Fecha: 20/12/2021 <br>
				Método Pago: Paypal<br>
				Transacción:s4543tergg	
                </p>	 						
                </td>
            </tr>
        </tbody>
</table>
<table class="tbl-cliente">
    <tbody>
        <tr>
            <td>NIT:</td>
            <td>2344536</td>
            <td>Telefono</td>
            <td>346467567867</td>
        </tr>
        <tr>
            <td>Nombre:</td>
            <td>Joel Alonso</td>
            <td>Direccion</td>
            <td>Ciudad</td>

        </tr>
    </tbody>
</table>
<table class="tbl-detalle">
    <thead>
        <tr>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Importe</th>    
        </tr>
        
    </thead>
    <tbody>
        <tr>
            <td>Teclado USB</td>
            <td>100</td>
            <td>1</td>
            <td>100</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td>Subtotal:</td>
            <td>100</td>
        </tr>
        <tr>
            <td>Envio:</td>
            <td>10</td>
        </tr>
        <tr>
            <td>Total:</td>
            <td>110</td>
        </tr>
    </tfoot>
</table>
<div><p>Si tienes preguntas sobre tu pedido, <br> pongase en contacto con nombre, teléfono y Email</p></div>	
<h4>¡Gracias por tu compra!</h4>	
</body>
</html>