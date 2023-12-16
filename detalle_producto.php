<?php
include('conex.php');

// Obtener el ID del producto desde la URL
$id_producto = isset($_GET['id']) ? $_GET['id'] : 0;

// Obtener la información del producto específico
$sql_detalle_producto = "SELECT * FROM propiedades WHERE id = $id_producto";
$resultado_detalle_producto = mysqli_query($conn, $sql_detalle_producto);
$producto_detalle = mysqli_fetch_assoc($resultado_detalle_producto);

// Obtener los detalles correspondientes al producto
$sql_detalles = "SELECT * FROM propiedades WHERE id = $id_producto";
$resultado_detalles = mysqli_query($conn, $sql_detalles);
$detalles_producto = mysqli_fetch_assoc($resultado_detalles);

mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/styless.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
  <style>
  .slick-prev, .slick-next {
    background-color: #0c1774; /* Color de fondo azul */
    color: white; /* Color del texto blanco */
    border: none; /* Sin borde */
    border-radius: 50%; /* Forma redonda */
    width: 37px; /* Ancho del botón */
    height: 37px; /* Altura del botón */
    font-size: 20px; /* Tamaño del texto */
    margin-right: -20px; /* Ajusta el margen derecho del botón previo (negativo) */
    margin-left: -20px; /* Ajusta el margen izquierdo del botón siguiente (negativo) */
    opacity: 1;
  }

  .slick-prev:hover, .slick-next:hover {
    background-color: #fab059; /* Cambia el color al pasar el mouse */
    
  }
  
</style>

</head>
<body>

<div class="container" data-aos="fade-right">
   

    <nav>
        <img src="img/LOGO_INSA.png" class="logo">
        <ul>
            <li><a href="index.php" style="color: black;">Inicio</a></li>
            <li><a href="index.php" style="color: black;">compra</a></li>
            <li><a href="index.php" style="color: black;">renta</a></li>
            <li><a href="index.php" style="color: black;">conocenos</a></li>
        </ul>
        <button class="btn">Contactanos</button>
    </nav>
<br><br>
        <div class="detalle-producto">
            <a class="textoproducto"><?php echo $producto_detalle['titulo']; ?></a>
        </div>
        <br> 
        <div class="detalles">    
          
            <div class="detalles1">
            <img class="previstaimg" src="<?php echo $producto_detalle['url_foto_principal']; ?>" alt="Imagen del producto">
            <br><br>    
           
           
         <center>   <div class="responsive">
    <div><img src="img/ejemplo.jpg" alt="Imagen 1"></div>
    <div><img src="img/ejemplo2.jpg" alt="Imagen 2"></div>
    <div><img src="img/ejemplo3.jpg" alt="Imagen 3"></div>
    <div><img src="img/ejemplo.jpg" alt="Imagen 4"></div>
    <div><img src="img/ejemplo2.jpg" alt="Imagen 5"></div>
    <div><img src="img/ejemplo3.jpg" alt="Imagen 6"></div>
    <div><img src="img/ejemplo.jpg" alt="Imagen 7"></div>
    <div><img src="img/ejemplo2.jpg" alt="Imagen 8"></div>
  </div></center>
                
                <br> <br>
              <center>  <div class="especificaciones">
                    <img class="pnglogos" src="img/tipo.png" alt="Estado"><p style="display: inline;"><?php echo $detalles_producto['estado']; ?></p>
                    <img class="pnglogos" src="img/metro.png" alt="Ubicacion"><p style="display: inline;"><?php echo $detalles_producto['ubicacion']; ?></p>
                    <img class="pnglogos" src="img/ubica.png" alt="tipo lugar"><p style="display: inline;"><?php echo $detalles_producto['tipo']; ?></p>

                </div></center>
                <br> <br>
             <div class="rentade">
                <p class="txtrenta">renta desde:<br>$<?php echo $producto_detalle['precio']; ?> $ / mes</p>
                <button class="miboton" style="width: 25%; height: 60%;">Quiero rentar</button>

             </div>    
            </div>
            <div class="detalles2">
                
               <center> <p class="depatext" style="font-weight: bold; font-size: 30px;">Contactanos</p> </center>
                
               <div class="contac1">
                <p class="depatext1">Nombre completo</p>
                <input type="text" id="miInput" name="miInput" placeholder="Tu nombre completo">
                <p class="depatext1">Numero de télefono</p>
                <input type="text" id="miInput" name="miInput" style="width: 40% !important; text-align: right;" placeholder="Numero de telefono">

                <p class="depatext1">E-mail</p>
                <input type="text" id="miInput" name="miInput" placeholder="Tu Email">
                <br><br>
                <input type="checkbox" name="tarea1"> Acepto el tratamiento de datos<br> ㅤ personales
                <br><br>
                </div>
                <center><button class="miboton" style="width: 80%;">Send Message</button></center>
<center><p class="depatext" style="font-weight: bold; font-size: 26px;">Redes Sociales</p>
</center>
<center><img src="img/twitter.png" class="imgredes">
<img src="img/fb.png" class="imgredes">
<img src="img/ig.png" class="imgredes">
<img src="img/wp.png" class="imgredes"></center>
            </div>
         
        </div><br>
        <div class="detalle-producto">

            <div class="detalles">    
          
                <div class="detalles1">
                <br> <br>
                 <a class="caracter">Características: </a>
                 <br> <br> <br>
                 <div class="textcaracter">
                 <a style="color: black !important;"><?php echo $producto_detalle['descripcion']; ?></a>  
                 <br><br><br>
                 <!-- Pruebas
                 <a class="caracter">Solucion diseño: </a><br><br>
                 <a style="color: black !important;"><?php echo $producto_detalle['Solucion_Disenio']; ?></a>  
                 <br><br><br>
                 <a class="caracter">Ejecución equipamiento: </a><br><br>
                 <a style="color: black;"><?php echo $producto_detalle['Ejecucion_Equipamiento']; ?></a>  
                 <br><br><br>
                -->
                 <a class="caracter">Localización: </a><br><br>
                 <a style="color: black;"><?php echo $producto_detalle['estado']; ?></a>  
                 <br><br><br>
                 <!-- Pruebas
                 <a class="caracter">Opinión: </a><br><br>
                 <a style="color: black;"><?php echo $producto_detalle['Opinion']; ?>
                
                </a>  -->

                </div>
                </div>

                <div class="detalles2">
        <br>
        <a class="caracter" style="font-size: 30px;">Breves Características: </a>
        <br><br>
        <a class="detalletext" style="display: inline;">Ciudad:</a>
<p style="display: inline;"><?php echo $detalles_producto['estado']; ?></p>
<br><br>
<!-- Pruebas
<a class="detalletext" style="display: inline;">Calle:</a>
<p style="display: inline;"><?php echo $detalles_producto['calle']; ?></p>
<br><br>
-->
<a class="detalletext" style="display: inline;">Garaje:</a>
<p style="display: inline;"><?php echo $detalles_producto['garage']; ?></p>
<br><br>
<a class="detalletext" style="display: inline;">Tipo:</a>
<p style="display: inline;"><?php echo $detalles_producto['tipo']; ?></p>
<br><br>
<a class="detalletext" style="display: inline;">Habitaciones:</a>
<p style="display: inline;"><?php echo $detalles_producto['habitaciones']; ?></p>
<br><br>
<a class="detalletext" style="display: inline;">Dimensiones:</a>
<p style="display: inline;"><?php echo $detalles_producto['dimensiones']; ?></p>
<br><br>
<!-- pruebas
<a class="detalletext" style="display: inline;">Total área:</a>
<p style="display: inline;"><?php echo $detalles_producto['total_a']; ?></p>
<br><br>
<a class="detalletext" style="display: inline;">Objeto aislado:</a>
<p style="display: inline;"><?php echo $detalles_producto['objeto']; ?></p>
<br><br>
<a class="detalletext" style="display: inline;">Balcón:</a>
<p style="display: inline;"><?php echo $detalles_producto['balcon']; ?></p>
<br><br>
<a class="detalletext" style="display: inline;">Terraza:</a>
<p style="display: inline;"><?php echo $detalles_producto['terraza']; ?></p>
<br><br>
-->
<a class="detalletext" style="display: inline;">Baños:</a>
<p style="display: inline;"><?php echo $detalles_producto['banios']; ?></p>
        <!-- Agrega más campos según sea necesario -->     
    
    </div> 
            </div>
          
        </div>

<footer>
        <?php include('footer.php'); ?>
    </footer>
    </div>   
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.responsive').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        centerMode: true, /* Activa el modo central */
        centerPadding: '20px', /* Ajusta el espacio entre las imágenes */
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        responsive: [
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              centerMode: true, /* Desactiva el modo central en pantallas pequeñas */
            }
          }
        ]
      });
    });
  </script>
</body>
</html>
