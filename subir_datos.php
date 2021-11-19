<?php

include ("db_conex.php");

/*if ($conex){
    echo "todo coerrecto";
}*/
if (isset($_POST['Solicitar']))
{
    if (strlen($_POST['name']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['id_pro']) >= 1 ) 
    {
            $Nombre     =trim($_POST['name']);
            $Direccion  =trim($_POST['direccion']);
            $Id_pro     =trim($_POST['id_pro']);
            $Cantidad   =trim($_POST['Cantidad']);
                if($Id_pro==1)
                {
                    $Monto = 180;
                }
                else{
                    if($Id_pro==2)
                {
                    $Monto = 350;
                }else{
                    if($Id_pro==3)
                {
                    $Monto = 500;
                }else{
                    if($Id_pro==4)
                {
                    $Monto = 350;
                }else {
                    if($Id_pro==5)
                {
                    $Monto = 250;
                }else{
                    if($Id_pro==6)
                {
                    $Monto = 600;
                }
                }
                }
                }
                }
                }
        $consulta="INSERT INTO pedidos(Nombre_Cliente, Dirección_Cliente, Monto, ID_Producto) VALUES ('$Nombre','$Direccion',($Monto*$Cantidad),'$Id_pro')";
        $resultado= mysqli_query ($conex,$consulta);
    
        if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Su pedido esta siendo procesado!</h3>
            <H3 class="tiket">
                Su tiket: <?php 
                echo $Nombre ?>

            </H3>
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