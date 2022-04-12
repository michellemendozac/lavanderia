<!DOCTYPE html>
<html lang="en">
 
<body>
<?php
	$nombre = "";
	$apellidom = "";
	$apellidop = "";
	$telefono = "";
	$observaciones = "";
	$correo = "";
	$calle = "";
	$numero = "";
	$numero_int = "";
	$colonia = "";
	$municipio = "";
	$cp = "";
	$cliente_id = 0;
	$direccion_id = 0;
	$promedio = 0;

	//print_array($cl);
	if(isset($cl)){
		$nombre    = $cl["nombre"];
		$apellidom = $cl["amaterno"];
		$apellidop = $cl["apaterno"];
		$telefono   = $cl["telefono"];
		$observaciones = $cl["observaciones"];
		$correo        = $cl["correo"];
		$calle         = $cl["calle"];
		$numero        = $cl["numero"];
		$numero_int    = $cl["n_int"];
		$colonia       = $cl["colonia"];
		$municipio     = $cl["municipio"];
		$cp            = $cl["cp"];
		$cliente_id    = $cl["id"];
		$direccion_id  = $cl["direccion_id"];
		$promedio      = $cl["promedio_compra"];
	}

?>
 
  
  <?php if(!isset($cl)){ ?>
 
	<?php }else{ ?>
		<h2>Editar cliente</h2>
	<?php } ?>
	
	
Login
  <a href="<?=base_url()?>/Login/cerrar_session"><h4>Cerrar sesion</h4> </a>
  <a href="<?=base_url()?>/listado"><h4>Listado de clientes</h4> </a>
  <br>
       

  <form id="cliente" method="POST" action="Registroclientes/nuevo">
    <div class="row">
    	<div class="col-md-6">
		     
		      <label for="nombre">Nombre:</label>
		      <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="<?=$nombre?>">
		  

		    <div class="form-group">
		      <label for="amaterno">Apellido Materno:</label>
		      <input type="text" class="form-control" id="amaterno" placeholder="Apellido Materno" name="amaterno" value="<?=$apellidom?>">
		    </div>
		    
		    <div class="form-group">
		      <label for="apaterno">Apellido Paterno:</label>
		      <input type="text" class="form-control" id="apaterno" placeholder="Apellido Paterno" name="apaterno" value="<?=$apellidop?>">
		    </div>

		    <div class="form-group">
		      <label for="telefono">Telefono:</label>
		      <input type="text" class="form-control" id="telefono" placeholder="Telefono" name="telefono" value="<?=$telefono?>" onblur="revisar_telefono(this.value)">
		    </div>

		    <div class="form-group">
		      <label for="obs">Observaciones:</label>
		      <input type="text" class="form-control" id="obs" placeholder="Observaciones" name="obs" value="<?=$observaciones?>">
		    </div>

		     <div class="form-group">
		      <label for="correo">Correo Electronico:</label>
		      <input type="text" class="form-control" id="correo" placeholder="Correo Electronico" name="correo" value="<?=$correo?>">
		    </div> 

		    <div class="form-group">
		      <label for="promedio">Promedio de compra:</label>
		      <input type="text" class="form-control" id="promedio" placeholder="Promedio de Compra" name="promedio" value="<?=$promedio?>">
		    </div> 

		</div>

	 
    	<div class="col-md-6">
		   

		    <div class="form-group">
		      <label for="calle">Calle:</label>
		      <input type="text" class="form-control" id="calle" placeholder="Calle" name="calle" value="<?=$calle?>">
		    </div>
		  
		    <div class="form-group">
		      <label for="numero">Numero:</label>
		      <input type="text" class="form-control" id="numero" placeholder="Numero" name="numero" value="<?=$numero?>">
		    </div>

		    <div class="form-group">
		      <label for="numero_int">Numero Interior:</label>
		      <input type="text" class="form-control" id="numero_int" placeholder="Numero Interior" name="numero_int" value="<?=$numero_int?>">
		    </div>


		    <div class="form-group">
		      <label for="colonia">Colonia:</label>
		      <input type="text" class="form-control" id="colonia" placeholder="Colonia" name="colonia" value="<?=$colonia?>">
		    </div>

		    <div class="form-group">
		      <label for="municipio">Municipio:</label>
		            <select class="form-control" name="municipio" id="municipio">
            <?php 

            foreach($municipios as $row)
            { 
              echo '<option value="'.$row->id.'">'.$row->nombre.'</option>';
            }
            ?>
            </select>

		    </div>   

		    <div class="form-group">
		      <label for="cp">CP:</label>		      
		      <input type="text" class="form-control" id="cp" placeholder="cp" name="cp" value="<?=$cp?>"> 		      
		    </div>

		</div>
	</div>
  
 	<?php if(!isset($cl)){ ?>
		<button type="submit" class="btn btn-success">Guardar</button>
	<?php }else{ ?>
		<button type="button" onclick="editar_cliente()" class="btn btn-success">Editar</button>
	<?php } ?>
    

  </form>
</div>

</body>
</html> 
