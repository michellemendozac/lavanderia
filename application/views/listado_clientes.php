<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registro de clientes</title>
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
  <h2>Listado de clientes</h2>
  <a href="<?=base_url()?>/Registroclientes"><h4>Nuevo cliente</h4> </a>

  <form id="cliente" method="POST">
    <div class="row">
    	<div class="col-md-12"> 

    		<table class="table" id="listado_clientes">
			  <thead> 
			    <tr>
			      <th scope="col">id</th>
			      <th scope="col">nombre</th>
			      <th scope="col">apellido</th>			      
			      <th scope="col">correo</th>
			      <th scope="col" class="text-center">telefono</th>
			      <th scope="col" class="text-center">estatus</th>
			      <th scope="col" class="text-center">promedio</th>
			      <th scope="col" class="text-center">sucursal</th>
			      <th scope="col">direccion</th>
			      <th scope="col">observaciones</th>
			      <th scope="col">&nbsp;</th>
			      <th scope="col">&nbsp;</th>
			    </tr> 
			  </thead>
			  <tbody>
			  	<?php foreach($clientes as $cliente){ //print_array($cliente); ?>
			    <tr>  
			      <th scope="row"><?=$cliente->id?></th>
			      <td><?=$cliente->nombre?></td>
			      <td><?=$cliente->apaterno." ".$cliente->amaterno?></td>
			      <td><?=$cliente->correo?></td>
			      <td class="text-center"><?=$cliente->telefono?></td>
			      <td class="text-center"><?=estatus_cliente($cliente->estatus)?></td>
			      <td class="text-center">$<?=$cliente->promedio_compra?></td> 
			      <td class="text-center"><?=sucursal($cliente->sucursal)?></td>
			      <td><?=$cliente->calle." #".$cliente->numero.", ".$cliente->colonia.", ".$cliente->nmunicipio." "?></td>
			      <td><?=$cliente->observaciones?></td> 
			      <td class="text-center"><a href="<?=base_url()?>/Registroclientes/editar_cliente/<?=$cliente->id?>"> Edit </a> </td>
			      <td class="text-center"><a href="<?=base_url()?>/Registroclientes/eliminar_cliente/<?=$cliente->id?>"> Delete  </a> </td>
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

<script>  

	$(document).ready( function () {
    	$('#listado_clientes').DataTable();
	} );

function nuevo_cliente(){
      jQuery.ajax({ 
            type: "POST",                  
            data: $("#cliente").serialize(),       
            url: "<?=base_url()?>/Registroclientes/nuevo/", 
            success: function(response) {                   
                console.log(response);                
            }  
       });
} 

</script> 