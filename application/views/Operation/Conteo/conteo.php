<!DOCTYPE html>
<html lang="en">
<head>
  <title>Conteos</title>
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
  
 
		<h2>Conteo</h2>



  <form id="cliente" method="POST">
    <div class="row">
    	<div class="col-md-6"> 
            

            <div class="form-group">
		        <label for="hora_recib">Nivel suciedad:</label>
		        <select class="form-control" placeholder="Tipo de servicio" name="giro"> 			  	 
                    <option value="1"> Bajo </option>
                    <option value="2"> Estandar </option>
                    <option value="2"> Alto</option>		        
                </select>
		    </div>

		</div>	 

        <div class="col-md-6"> 
            

            <div class="form-group">
		        <label for="hora_recib">Observaciones/Instrucciones:</label>
		        <textarea  class="form-control"></textarea>
		    </div>

		</div>	

	</div>

    <div class="row">
    	<div class="col-md-4">  
            <h3> Ropa general </h3>   

		    <div class="form-group">
		      <label for="hora_recib">  Camisas c/manga larga:</label>
		      <input type="number" class="form-control" name="" value="">
		    </div>

            <div class="form-group">
		      <label for="hora_recib"> Camisa s/manga:</label>
              <input type="number" class="form-control" name="" value="">
		    </div> 


		    <div class="form-group">
		      <label for="promesa_e">Camisa polo:</label>
		      <input type="number" class="form-control" name="" value="">
		    </div>

            <div class="form-group">
		      <label for="promesa_h">Blusa:</label>
              <input type="number" class="form-control" name="" value="">
		    </div>

		    <div class="form-group">
		      <label for="promesa_h">Pantalon mezclilla:</label>
		      <input type="number" class="form-control" name="" value="">
		    </div>
 
            <div class="form-group">
		      <label for="promesa_h">Pantalon vestir:</label>
              <input type="number" class="form-control" name="" value="">
		    </div>
            
            <div class="form-group">
		      <label for="promesa_h">Pantalon pants:</label>
              <input type="number" class="form-control" name="" value="">
		    </div>

            <div class="form-group">
		      <label for="promesa_h">Chamarra:</label>
              <input type="number" class="form-control" name="" value="">
		    </div>

            <div class="form-group">
		      <label for="promesa_h">Sueter:</label>
              <input type="number" class="form-control" name="" value="">
		    </div>

            <div class="form-group">
		      <label for="promesa_h">Sudadera:</label>
              <input type="number" class="form-control" name="" value="">
		    </div>

            <div class="form-group">
		      <label for="promesa_h">Top:</label>
              <input type="number" class="form-control" name="" value="">
		    </div>

            <div class="form-group">
		      <label for="promesa_h">Falda:</label>
              <input type="number" class="form-control" name="" value="">
		    </div>

            <div class="form-group">
		      <label for="promesa_h">Short:</label>
              <input type="number" class="form-control" name="" value="">
		    </div>

            <div class="form-group">
		      <label for="promesa_h">Conjunto pijama:</label>
              <input type="number" class="form-control" name="" value="">
		    </div>

            <div class="form-group">
		      <label for="promesa_h">Legins:</label>
              <input type="number" class="form-control" name="" value="">
		    </div>

            <div class="form-group">
		      <label for="promesa_h">Filipina:</label>
              <input type="number" class="form-control" name="" value="">
		    </div>

            <div class="form-group">
		      <label for="promesa_h">Pantalon filipina:</label>
              <input type="number" class="form-control" name="" value="">
		    </div>

            <div class="form-group">
		      <label for="promesa_h">Conjunto filipina/pantalón:</label>
              <input type="number" class="form-control" name="" value="">
		    </div>

            <div class="form-group">
		      <label for="promesa_h">Pantalon pants:</label>
              <input type="number" class="form-control" name="" value="">
		    </div>

		</div>

        <div class="col-md-4">  
            <h3> Ropa Interior </h3>   

		    <div class="form-group">
		      <label for="hora_recib">  Pantaletas:</label>
		      <input type="number" class="form-control" name="" value="">
		    </div>

            <div class="form-group">
		      <label for="hora_recib"> Brasier: </label>
              <input type="number" class="form-control" name="" value="">
		    </div> 


		    <div class="form-group">
		      <label for="promesa_e"> Body:</label>
		      <input type="number" class="form-control" name="" value="">
		    </div>

            <div class="form-group">
		      <label for="promesa_h"> Pares calcetas: </label>
              <input type="number" class="form-control" name="" value="">
		    </div>

		    <div class="form-group">
		      <label for="promesa_h">Calceta sola:</label>
		      <input type="number" class="form-control" name="" value="">
		    </div>
 
            <div class="form-group">
		      <label for="promesa_h">Baby Doll:</label>
              <input type="number" class="form-control" name="" value="">
		    </div>
            
            <div class="form-group">
		      <label for="promesa_h">Boxer Mujer:</label>
              <input type="number" class="form-control" name="" value="">
		    </div>

            <div class="form-group">
		      <label for="promesa_h">Boxer Hombre:</label>
              <input type="number" class="form-control" name="" value="">
		    </div>

            <div class="form-group">
		      <label for="promesa_h">Traje de baño:</label>
              <input type="number" class="form-control" name="" value="">
		    </div>
		</div>

        <div class="col-md-4">  
            <h3> Ropa Interior </h3>   

		    <div class="form-group">
		      <label for="hora_recib"> Edredon:</label>
		      <input type="number" class="form-control" name="" value="">
		    </div>

            <div class="form-group">
		      <label for="hora_recib"> Toalla : </label>
              <input type="number" class="form-control" name="" value="">
		    </div> 

            <div class="form-group">
		      <label for="hora_recib"> Toalla facial : </label>
              <input type="number" class="form-control" name="" value="">
		    </div> 

            <div class="form-group">
		      <label for="hora_recib"> Trapo: </label>
              <input type="number" class="form-control" name="" value="">
		    </div> 

            <div class="form-group">
		      <label for="hora_recib"> Colcha : </label>
              <input type="number" class="form-control" name="" value="">
		    </div> 

            <div class="form-group">
		      <label for="hora_recib"> Sábana : </label>
              <input type="number" class="form-control" name="" value="">
		    </div> 

            <div class="form-group">
		      <label for="hora_recib"> Almohada: </label>
              <input type="number" class="form-control" name="" value="">
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