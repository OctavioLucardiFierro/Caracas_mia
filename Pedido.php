<!DOCTYPE html>
<html>
<head> 
    <link rel = "stylesheet" href = "Caracasmias.css">
    <title>Solicitar pedidos</title>
</head>
<body>
    <main class= "barra_de_navegacion">
           <header>
                <img src="logo.png" width="35%" height="33%" align-items= center>
          </header>
    </main>
                    <main class="contenido">
                        <section>
                        
                          <form method="post">
                                <h1>Solicitar pedido</h1>
                                <input type="text" name="name" placeholder="Nombre completo">
                                <input type="text" name="direccion" placeholder="Direccion">
                                <input type="text" name="monto" pattern="[0-9]+" required placeholder="Monto">
                                <input type="submit" name="Solicitar">
                            </form>
                        <?php
                        include ("subir_datos.php");
                        ?>
                          </section>
                    </main>
                </form>
                <footer>
          <img class="iconos" src="footer.png"><br>
            ¡Siguenos en Instagram!<br>
  <ul id="redes-sociales">
    <li class="iconos"><a class="logos" href="https://www.instagram.com/caracas_mia2021/?utm_medium=copy_link"><i class="fab fa-instagram"></i> </a></li>
  </ul>
  
</footer>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

 <script src="https://kit.fontawesome.com/0c78f4bcc5.js" crossorigin="anonymous"></script>
</body>
</html>