<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registro de Pedidos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
	body .container {
    width: 1580px !important;
}
</style>
<body>
	 
<?php
	$cliente_id = 0;
	$cliente = "";
	$apellidom = "";
	$apellidop = "";
	$tipo_servicio = "";
	$recepcion = "";

	//print_array($serv);
	if(isset($pe)){		
		$cliente = ""; //$pe[""];
		//$tipo_servicio = $pe["tipo_servicio"];
		$tipo_servicio = $pe["tipo_servicio"];		 
		$apellidom = "";
		$apellidop = "";
		$recepcion =  $pe["recepcion"];
		$repartidor = $pe["repartidor"];
		
	}

?>
<div class="container">
  
  <?php if(!isset($pe)){ ?>
 
	<?php }else{ ?>
		<h2>Editar Pedido</h2>
	<?php } ?>
  <a href="<?=base_url()?>/Login/cerrar_session"><h4>Salir</h4> </a>

  <a href="<?=base_url()?>/Admin/Order/order_list"><h4>Listado de Pedidos</h4> </a>

  <form id="cliente" method="POST">
    <div class="row">
    	<div class="col-md-6">
		     

		    <div class="form-group">
		      <label for="recibido">Pedido WashDay:</label>
		      <input type="time" class="form-control" name="washday" value="">
		    </div>

		    <div class="form-group">
		      <label for="hora_recib">Nombre Cliente:</label>
		      <input type="date" class="form-control" name="hora_recib" value="">
		    </div>

            <div class="form-group">
		      <label for="hora_recib">Procedencia:</label>
		      <input type="date" class="form-control" name="hora_recib" value="">
		    </div>
		   

            <div class="form-group">
		        <label for="hora_recib">Giro:</label>
		        <select class="form-control" placeholder="Tipo de servicio" name="giro"> 			  	 
                    <option value="1"> Barbería </option>
                    <option value="2"> Spa </option>		        
                </select>
		    </div>
            

            <div class="form-group">
		        <label for="hora_recib">Recepción:</label>
		        <select class="form-control" placeholder="Tipo de servicio" name="giro"> 			  	 
                    <option value="1"> Sucursal </option>
                    <option value="2"> Domicilio </option>		        
                </select>
		    </div>


		    <div class="form-group">
		      <label for="promesa_e">Promesa Entrega:</label>
		      <input type="time" class="form-control" name="promesa_e" value="">
		    </div>

		    <div class="form-group">
		      <label for="promesa_h">Promesa Hora:</label>
		      <input type="text" class="form-control" name="promesa_h" value="">
		    </div>

 

		</div>

	 
	</div>
   

  </form>

 
</div>

</body>
</html>

<script>  
var item = 0;

function delete_item(id){
	$("#item_order_"+id).remove();
}


function add_item(){

	var cad = '<tr id="item_order_'+item+'">'+  
			      '<th scope="row"> <input type="text" name="del['+item+']"> </th>'+
			      '<th scope="row"> <input type="text" name="cant[]"> </th>'+
			      '<th scope="row"> <input type="text" name="descripcion[]"> </th>'+
				  '<th scope="row"> <input type="text" name="color[]"> </th>'+
				  '<th scope="row"> <input type="text" name="mark[]"> </th>'+
			      '<th scope="row"> <input type="text" name="precio[]"> </th>'+
			      '<th scope="row"> <input type="text" name="importe[]"> </th>'+		      
			      '<td class="text-center">  Edit   </td>'+
			      '<td class="text-center" onclick="delete_item('+item+')"> Delete  </td>'+
			    '</tr>';
	$("#add_order").append(cad);
	item++;
	
}
 

function nuevo_cliente(){
      jQuery.ajax({ 
            type: "POST",                  
            data: $("#cliente").serialize(),       
            url: "<?=base_url()?>/Registroclientes/nuevo/", 
            success: function(response) {                   
                location.href = '<?=base_url()?>/Admin/Order/order_list';               
            }  
       });
}
  
function editar_cliente(){
      jQuery.ajax({ 
            type: "POST",                   
            data: $("#cliente").serialize(),       
            url: "<?=base_url()?>/Registroclientes/editar_cliente_info/", 
            success: function(response) {                   
                location.href = '<?=base_url()?>/Admin/Order/order_list';               
            }  
       });
}
</script>
