<?php  
	
	function print_array($array){
	    echo "<pre>";    
	    print_r($array);
	    echo "</pre>";   
	}
	

	function sucursal($s){		      
	    switch($s){
	            case "1": $sucursal = "PS";    break;	            
	    }
	    return $sucursal;
	}

	function estatus_cliente($e){		      
	    switch($e){
	            case "1": $estatus = "registrado";          break; 
	    }
	    return $estatus;
	}

	function base_url(){
		return '/lavanderia';
	}

?>