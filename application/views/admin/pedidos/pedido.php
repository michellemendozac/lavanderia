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
	$repartidor = "";
	$estatus = "";
	$calificacion = "";
	$direccion = "";
	$observaciones = "";
	$promocion = "";
	$recibido = "";
	$hora_recib = "";
	$f_promesa = "";
	$h_promesa = 0;
	$f_entregado = "";
	$entregado = 0;
	$h_entregado = 0;
	$importe = 0;
	$descuento = 0;
	$total = 0;
	$iva = 0;
	$total_total = 0;
	$pagado = 0;
	$repartidor_e = 0;

	//print_array($serv);
	if(isset($pe)){		
		$cliente = ""; //$pe[""];
		//$tipo_servicio = $pe["tipo_servicio"];
		$tipo_servicio = $pe["tipo_servicio"];		 
		$apellidom = "";
		$apellidop = "";
		$recepcion =  $pe["recepcion"];
		$repartidor = $pe["repartidor"];
		$estatus = $pe["order_status"];
		$calificacion = "";
		$direccion = "";
		$observaciones = "";
		$promocion = $pe["promocion"];
		$recibido = "";
		$entregado = $pe["entregado"];
		$hora_recib = $pe["entregado"];
		$promesa_e = "";
		$promesa_h = 0;
		$hora_entregado = 0;
		$importe = 0;
		$descuento = 0;
		$total = 0;
		$iva = 0;
		$total_total = 0;
		$pagado = 0;
		$entrega = $pe["entrega"];
		$repartidor_e = $pe["repartidor_e"]; 
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
    	<div class="col-md-6">
		    <div class="form-group">
		      <label for="nombre">Cliente:</label>
		      <select class="form-control" placeholder="Tintoreríaipo de servicio" name="cliente_id">
		      	<?php foreach($cl as $cli){ ?>
		      		<option value="<?=$cli->id?>" <?=($cli->id==$cliente_id)?"selected":""?>><?=$cli->nombre." ".$cli->telefono." ".$cli->id?></option>
		      	<?php } ?>
		      </select>
		    </div>

		    <div class="form-group">
		      <label for="tipo_servicio">Tipo de servicio:</label>
		      <select class="form-control" placeholder="Tipo de servicio" name="tipo_servicio">
			  	<?php foreach($serv as $ser){ ?>
		     		<option value="<?=$ser->id_service_type?>" <?=($ser->id_service_type == $tipo_servicio)?"selected":""?>> <?=ucwords($ser->service_type)?> </option>
		      	<?php } ?> 
		      </select>
		    </div>
		    

		    <div class="form-group">
		      <label for="recibido">Recibido:</label>
		      <input type="time" class="form-control" name="recibido" value="<?=$recibido?>">
		    </div>

		    <div class="form-group">
		      <label for="hora_recib">Hora Recibido:</label>
		      <input type="date" class="form-control" name="hora_recib" value="<?=$hora_recib?>">
		    </div>


		    <div class="form-group">
		     <label for="recepcion">Recepcion:</label>		      
		     <select class="form-control" placeholder="Tipo de servicio" name="recepcion">
			 	<?php foreach($reception as $rec){ ?>
		     		<option value="<?=$rec->id?>" <?=($rec->id == $recepcion)?"selected":""?>> <?=ucwords($rec->type)?> </option>
		      	<?php } ?>		      	
		      </select>
			  
		    </div>

		    <div class="form-group">
		      <label for="repartidor_rec">Repartidor:</label>		      
		      <select class="form-control" placeholder="Tipo de servicio" name="repartidor_rec">
			  <?php foreach($employe as $emp){ ?>
		     		<option value="<?=$emp->id?>" <?=($emp->id == $repartidor)?"selected":""?>> <?=ucwords($emp->name)." ".ucwords($emp->lastname)?> </option>
		      	<?php } ?> 
		      </select>
		    </div>
 

		    <div class="form-group">
		      <label for="estatus">Estatus:</label>
		      <select class="form-control" placeholder="Estatus" name="estatus">
			  	<?php foreach($order_status as $os){ ?>
		     		<option value="<?=$os->id?>" <?=($os->id == $estatus)?"selected":""?>> <?=ucwords($os->order_status)?> </option>
		      	<?php } ?>
		      </select>
		    </div>

		     <div class="form-group">
		      <label for="calificacion">Calificacion:</label>
		      <input type="number" class="form-control" placeholder="Calificacion" max="10" name="calificacion" value="<?=$calificacion?>">
		    </div> 

		    <div class="form-group">
		      <label for="pagado">Pagado:</label>
		      <select class="form-control" placeholder="Estatus" name="pagado">
		      	<option value="1" <?=($pagado=="1")?"selected":""?>>Por Pagar</option>
		      	<option value="2" <?=($pagado=="2")?"selected":""?>>Abonado</option>
		      	<option value="3" <?=($pagado=="3")?"selected":""?>>Pagado</option>
		      </select>
		    </div>

		     <div class="form-group">
		      <label for="promocion">Promocion:</label>
		      <select class="form-control" placeholder="Promocion" name="promocion">
			  	<?php foreach($promotions as $pro){ ?>
		     		<option value="<?=$pro->id?>" <?=($pro->id == $promocion)?"selected":""?>> <?=ucwords($pro->promotion)?> </option>
		      	<?php } ?>
		      </select>		      
		    </div>

		    <div class="form-group">
		      <label for="promesa_e">Promesa Entrega:</label>
		      <input type="time" class="form-control" name="promesa_e" value="<?=$f_promesa?>">
		    </div>

		    <div class="form-group">
		      <label for="promesa_h">Promesa Hora:</label>
		      <input type="text" class="form-control" name="promesa_h" value="<?=$h_promesa?>">
		    </div>

 

		</div>

	 
    	<div class="col-md-6">

		    

		    <div class="form-group">
		      <label for="f_entregado">Entrega:</label>
		      <input type="date" class="form-control" name="entregado" value="<?=$f_entregado?>">
		    </div>

		    <div class="form-group">
		      <label for="h_entregado">Hora Entregado:</label>
		      <input type="time" class="form-control" name="h_entregado" value="<?=$h_entregado?>">
		    </div>  

		    <div class="form-group">
		     <label for="entregado">Entregado en:</label>		      
		     <select class="form-control" placeholder="Tipo de servicio" name="entregado"> 
			 	<?php foreach($reception as $rec){ ?>
		     		<option value="<?=$rec->id?>" <?=($rec->id == $entrega)?"selected":""?>> <?=ucwords($rec->type)?> </option>
		      	<?php } ?> 
		      </select>
		    </div>

			

		    <div class="form-group">
		      <label for="repartidor_entrega">Repartidor entrega:</label>
		      <select class="form-control" placeholder="Tipo de servicio" name="repartidor_entrega"> 
			  	<?php foreach($employe as $emp){ ?>
		     		<option value="<?=$emp->id?>" <?=($emp->id == $repartidor_e)?"selected":""?>> <?=ucwords($emp->name)." ".ucwords($emp->lastname)?> </option>
		      	<?php } ?>  
		      </select>
		    </div>


		    <div class="form-group">
		      <label for="importe">Importe:</label>
		      <input type="text" class="form-control" name="importe" value="<?=$importe?>">     
		    </div>

		    <div class="form-group">
		      <label for="descuento">Descuento:</label>
		      <input type="text" class="form-control" name="descuento" value="<?=$descuento?>">
		    </div>

		    <div class="form-group">
		      <label for="importec_desc">Importe con descuento:</label>
		      <input type="text" class="form-control" placeholder="Importe con descuento" name="importec_desc" value="<?=$total?>"> 		      
		    </div>

		    <div class="form-group">
		      <label for="iva">Iva:</label>
		      <input type="text" class="form-control" placeholder="iva" name="iva" value="<?=$iva?>"> 		      
		    </div>

		    <div class="form-group">
		      <label for="total">Total:</label>
		      <input type="text" class="form-control" placeholder="Total" name="total_total" value="<?=$total_total?>">
		    </div>		    

		    <div class="form-group">
		      <label for="promedio">Observaciones:</label>
		      <textarea class="form-control"  placeholder="Observaciones" name="observaciones"><?=$observaciones?></textarea>
		    </div> 

		</div>
	</div>
  
 	<?php if(!isset($pe)){ ?>
		<button type="button" onclick="nuevo_cliente()" class="btn btn-success">Guardar</button>
	<?php }else{ ?>
		<button type="button" onclick="editar_cliente()" class="btn btn-success">Editar</button>
	<?php } ?>
    

  </form>


  <div class="row">
    	<div class="col-md-12"> <!-- id="nota_pedido" -->
    		<table class="table" style="max-width:100%" >
			  <thead> 
			    <tr>
			      <th scope="col" >DEL</th>
			      <th scope="col" >CANT</th>
				  <th scope="col" class="text-center">UNIDAD</th>
			      <th scope="col" 0px;">SERVICIO</th>
				  <th scope="col" >PRODUCTO</th>
				  <th scope="col" >DESCRIPCION</th>
				  <th scope="col" class="text-center">COLOR</th>
			      <th scope="col" class="text-center">MARCA</th>	
			      <th scope="col" class="text-center" >PRECIO</th>
			      <th scope="col"  class="text-center">IMPORTE</th>
				  
				  <th scope="col" width="3%">&nbsp;</th>
			      <th scope="col" width="4%"> <span onclick="add_item()">more</span> </th>
			    </tr> 
			  </thead>
			  <tbody id="add_order">
			  	
			  <?php if(isset($detail_list) && is_array($detail_list)){ 
			  		foreach($detail_list as $det){  ?> 
			    <tr id="item_order_d<?=$det->id?>" style="max-width:100%" >  
			      <th scope="row" > <input type="checkbox" name="del[]" <?=($det->delicate == "1")?"checked":""?> >  </th>
			      <th scope="row" > <input type="text" style="width:4rem"  name="cant[]" value="<?=$det->amount?>">  </th>
				  <th scope="row" > <input type="text" style="width:4rem" name="cant[]" value="<?=$det->unit?>">  </th>
				  <th scope="row" > <input type="text" style="width:10rem" name="cant[]" value="<?=$det->service_type?>">  </th>
				  <th scope="row" > <input type="text" style="width:20rem" name="cant[]" value="<?=$det->product_name?>">  </th>
			      <th scope="row" > <input type="text" style="width:20rem" name="descripcion[]" value="<?=$det->description?>">  </th>
				  <th scope="row" > <input type="text" style="width:10rem" name="color[]" value="<?=$det->color?>">  </th>
				  <th scope="row" > <input type="text" style="width:10rem" name="mark[]" value="<?=$det->mark?>">  </th>
			      <th scope="row" > <input type="text" style="width:10rem" name="precio[]" value="<?=$det->price?>">  </th>
			      <th scope="row" > <input type="text" style="width:10rem" name="importe[]" value="<?=$det->price*$det->amount?>">   </th>
			      <td class="text-center" width="3%"><a href="#"> I </a> </td>
			      <td class="text-center" width="4%" onclick="delete_item('d<?=$det->id?>')"> X </td>
			    </tr> 
			  <?php } } ?>

			  </tbody>
			</table> 


    	</div>
  </div>
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