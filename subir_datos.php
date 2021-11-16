<?php

include ("db_conex.php");

/*if ($conex){
    echo "todo coerrecto";
}*/
if (isset($_POST['Solicitar']))
{
    if (strlen($_POST['name']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['monto']) >= 1 ) 
    {
            $Nombre    =trim($_POST['name']);
            $Direccion  =trim($_POST['direccion']);
            $Monto     =trim($_POST['monto']);

        $consulta="INSERT INTO pedidos(Nombre_Cliente, Dirección_Cliente, Monto) VALUES ('$Nombre','$Direccion','$Monto')";
        $resultado= mysqli_query ($conex,$consulta);
    
        if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Su pedido esta ciendo procesado!</h3>
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