<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pedidos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
 

</head> 
<body>

<div class="container">
  <h2>Listado de Pedidos</h2> 
  <a href="<?=base_url()?>/Admin/Order/New_order"><h4>Nuevo Pedido</h4> </a>
   <form method="POST">
    <div class="row">
    	<div class="col-md-12"> 

    		<table class="table" id="listado_pedidos">
			  <thead> 
			    <tr>
			      <th scope="col">id</th>
			      <th scope="col">Cliente</th>
			      <th scope="col">tipo servicio</th>	
			      <th scope="col" class="text-center">estatus</th>
			      <th scope="col" class="text-center">calificacion</th>			     
			      <th scope="col">Recibido</th>			      
			      <th scope="col">Entrega</th>
			      <th scope="col">importe</th>
			      <th scope="col">Descuento</th>
			      <th scope="col">Imp c/desc</th> 
			      <th scope="col">Iva</th>
			      <th scope="col">Total</th>
			      <th scope="col">pagado</th>
			      <th scope="col">&nbsp;</th>
			      <th scope="col">&nbsp;</th>
			    </tr> 
			  </thead>
			  <tbody>
			  	<?php foreach($orders as $order){  ?>
			    <tr>  
			      <th scope="row"><?=$order->id?></th>
			      <td><?=$order->nombre?></td>
			      <td><?=$order->tipo_servicio?></td>			      
			      <td class="text-center"><?=$order->estatus?></td>
			      <td class="text-center"><?=$order->calificacion?></td>			      
			      <td class="text-center"><?=$order->recibido." ".$order->hora_recibido?></td>			      
			      <td class="text-center"><?=$order->promesa_entrega." ".$order->hora_promesa_entrega?></td>
			      <td class="text-center"><?=$order->importe?></td>
			      <td class="text-center"><?=$order->descuento?></td>
			      <td class="text-center"><?=$order->total?></td>
			      <td class="text-center"><?=$order->iva?></td>
			      <td class="text-center"><?=$order->total_total?></td>
			      <td class="text-center"><?=$order->pagado?></td>
			      <td class="text-center"><a href="<?=base_url()?>/Admin/Order/Edit_order/<?=$order->id?>"> Edit </a> </td>
			      <td class="text-center"><a href="<?=base_url()?>/Admin/Order/Delete_order/<?=$order->id?>"> Delete  </a> </td>
			    </tr> 
			    <?php } ?>
			  </tbody>
			</table> 

		</div>
	</div>
  </form>
</div>

</body>
</html>

<script type="text/javascript">

	$(document).ready( function () {
    	$('#listado_pedidos').DataTable();
	} );  


</script> 