<?php

include ("db_conex.php");

/*if ($conex){
    echo "todo coerrecto";
}*/
if (isset($_POST['Solicitar'])){    
if (strlen ($_POST ['name']) >= 1 && strlen($_POST ['direccion'] >= 1) && strlen($_POST ['monto'] >= 1){
    $name = trim($_POST['name']);
    $direccion = trim($_POST['direccion']);
    $monto = trim($_POST['monto']);

        $consulta="INSERT INTO pedidos(Nombre_Cliente, Dirección_Cliente, Monto) VALUES ('$name','$direccion','$monto')";
        $resultado= mysqli_query ($conex,$consulta);
    
        if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }
            else {
                ?> 
                <h3 class="bad">¡Por favor complete los campos!</h3>
            <?php
        }
}
?>