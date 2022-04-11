<!DOCTYPE html>
<html lang="en">
 
    <head>
        <meta charset="utf-8" />
 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
  
 
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?=base_url()?>/assets/images/favicon.ico">

        <!-- third party css -->
        <link href="<?=base_url()?>/assets/css/vendor/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>/assets/css/vendor/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>/assets/css/vendor/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>/assets/css/vendor/select.bootstrap4.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="<?=base_url()?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>/assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="<?=base_url()?>/assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
        

    </head>
    <br> <br> <br> <br> <br>
 
    <form id="cliente" method="POST">
    <div class="row">
    	<div class="col-md-12"> 
   		<table id="scroll-horizontal-datatable" class="table w-100 nowrap">
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
 
                                   
			  	<?php 
			  	if($clientes == '0'){
echo "no hay registros";

}


else{
  // si hay registros

			  	
			  	
			  	
			  	foreach($clientes as $cliente){ //print_array($cliente); 
			  	
			  	
			  	?>
			  	
			    <tr>  
			      <th scope="row"><?=$cliente->id?></th>
			      <td><?=$cliente->nombre?></td>
			      <td><?=$cliente->apaterno." ".$cliente->amaterno?></td>
			      <td><?=$cliente->correo?></td>
			      <td class="text-center"><?=$cliente->telefono?></td>
			      <td class="text-center"><?=estatus_cliente($cliente->estatus)?></td>
			      <td class="text-center">$<?=$cliente->promedio_compra?></td> 
			      <td class="text-center"><?=sucursal($cliente->sucursal)?></td>
			      <td><?=$cliente->calle."  <br> #".$cliente->numero.", <br> ".$cliente->colonia.",  <br> ".$cliente->nmunicipio." "?></td>
			      <td><?=$cliente->observaciones?></td> 
			      <td class="text-center"><a href="<?=base_url()?>/Registroclientes/editar_cliente/<?=$cliente->id?>"> <i class="mdi mdi-pencil"></i> </a> </td>
			      <td class="text-center"><a href="<?=base_url()?>/eliminar/<?=$cliente->id?>"> <i class="mdi mdi-delete"></i>  </a> </td>
			    </tr> 
			    <?php }} ?>
			  </tbody>
</table>
  
		</div>
	</div>
  </form>
 
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

 <!-- bundle -->
        <script src="<?=base_url()?>/assets/js/vendor.min.js"></script>
        <script src="<?=base_url()?>/assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="<?=base_url()?>/assets/js/vendor/jquery.dataTables.min.js"></script>
        <script src="<?=base_url()?>/assets/js/vendor/dataTables.bootstrap4.js"></script>
        <script src="<?=base_url()?>/assets/js/vendor/dataTables.responsive.min.js"></script>
        <script src="<?=base_url()?>/assets/js/vendor/responsive.bootstrap4.min.js"></script>
        <script src="<?=base_url()?>/assets/js/vendor/dataTables.buttons.min.js"></script>
        <script src="<?=base_url()?>/assets/js/vendor/buttons.bootstrap4.min.js"></script>
        <script src="<?=base_url()?>/assets/js/vendor/buttons.html5.min.js"></script>
        <script src="<?=base_url()?>/assets/js/vendor/buttons.flash.min.js"></script>
        <script src="<?=base_url()?>/assets/js/vendor/buttons.print.min.js"></script>
        <script src="<?=base_url()?>/assets/js/vendor/dataTables.keyTable.min.js"></script>
        <script src="<?=base_url()?>/assets/js/vendor/dataTables.select.min.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="<?=base_url()?>/assets/js/pages/demo.datatable-init.js"></script>
