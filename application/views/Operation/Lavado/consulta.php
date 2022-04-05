<!DOCTYPE html>
<html lang="en">
<head>
  <title>Instrucciones</title>
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
		<h2>Registro de Pedidos</h2>
	<?php }else{ ?>
		<h2>Editar Pedido</h2>
	<?php } ?>

  <a href="<?=base_url()?>/Admin/Order/order_list"><h4>Listado de Pedidos</h4> </a>

  <form id="cliente" method="POST">
    <div class="row">
        <h4>Consulta Pedido</h4>

    	<div class="col-md-6">  
            <div class="form-group">
		      <label for="hora_recib"> id-pedido:</label>
              <input type="number" class="form-control" name="" value="">
		    </div> 
 
		</div> 

        <div class="col-md-6">  
             <h1>Por Lavar</h1>
             <h1>Lavando</h1> 
		     <h1>Lavado</h1>              
		</div>   
	</div>


    <div class="row">
        

        <div class="col-md-12">  
             <h1>Estatus</h1>
		     <h1>Instrucciones de lavado</h1>              
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