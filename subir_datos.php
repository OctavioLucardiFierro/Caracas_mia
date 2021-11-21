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
         //   $CANT       =trim($_POST['cantidad']);
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
        $consulta="INSERT INTO pedidos(Nombre_Cliente, Dirección_Cliente, Monto, ID_Producto) VALUES ('$Nombre','$Direccion','$Monto','$Id_pro')";
        $resultado= mysqli_query ($conex,$consulta);
    
        if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Su pedido esta siendo procesado!</h3>
            <h4 class="el_tike">
                El ticket se le dara junto al pedido.
                Su ticket:
                <?php 
                echo '<p>El cliente es: '.$Nombre.'</p>';
                echo '<p>Direccion: '.$Direccion.'</p>';
                echo '<p>Producto Nº: '.$Id_pro.'</p>';
                echo '<p>El total a pagar: '.$Monto.'$</p>';
                ?>

            </h4>
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