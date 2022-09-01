<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>


<body>
    <div class="wnd-page l-page cs-gray ac-none t-btn-fw-l t-nav-fw-l t-pd-fw-l">
		<div id="wrapper" class="l-w cf t-04">

			<div class="l-bg cf">
				<div class="s-bg-l">
                    
					
				</div>
				<div class="s-bg-l s-bg-lo"></div>
			</div>

            

<br><br><br>
<nav class="navbar navbar-expand-sm bg-ligth justify-content-center">
    <a class="navbar-brand"><img src="./Imagenes/logo vector-4.png" width="200" height="180" class="rounded-pill"></a>                 
</nav>

<!-------------------------------------------------carrousel--------------------------------------------->
<div id="fondo">
        <div class="carousel">
            
        <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
                <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
                    <!-- slide -->
                <div class="carousel-inner">
                        <div class="carousel-item active"> <!-- por ser el primero q se muestra-->
                            <img src="./Imagenes/carrucel_19.jpeg" alt="..." class="d-block w-100">
                            <div class="carousel-caption">
                                <h3 >Funny Flower Pot</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./Imagenes/18.jpeg" alt="..." class="d-block w-100">
                            <div class="carousel-caption">
                                <h3>Funny Flower Pot</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./Imagenes/carrucel_11.jpeg" alt="..." class="d-block w-100">
                            <div class="carousel-caption">
                                <h3>Funny Flower Pot</h3>
                            </div>
                </div>
                        <!--botones carousel-->
                </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                </div>
        </div>


<!------------------------------------------------galeria------------------------------------------------------->

        
        <div class="galeria" id="categoria1">
        <div><br><br><br></div>
            <h1>Diseños Divertidos</h1>
            <div class="linea"></div>
            <div class="contenedor-imagenes">
                <div class="imagen">
                    <img src="./Imagenes/07_flowers2.jpeg" alt=".">
                    <div class="overlay">
                        <h3>Flower by Funny Flower Pot </h3> 
                    </div>
                </div>
                <div class="imagen">
                    <img src="./Imagenes/25_2.jpg" alt=".">
                    <div class="overlay">
                        <h3>Cute by Funny Flower Pot </h3> 
                    </div>  
                </div>
                <div class="imagen">
                    <img src="./Imagenes/06_pokemon2.jpeg" alt=".">
                    <div class="overlay">
                        <h3>Pokemon by Funny Flower Pot </h3> 
                    </div>  
                </div>     
                <div class="imagen">
                    <img src="./Imagenes/25.jpeg" alt=".">
                    <div class="overlay">
                        <h3>Funny Flower Pot </h3> 
                    </div> 
                </div>       
                <div class="imagen">
                    <img src="./Imagenes/9_little pony.jpeg" alt=".">
                    <div class="overlay">
                        <h3>Little Pony by Funny Flower Pot </h3> 
                    </div> 
                </div>      
                <div class="imagen">
                    <img src="./Imagenes/20_sandias.jpeg" alt=".">
                    <div class="overlay">
                        <h3>Watermelon by Funny Flower Pot </h3> 
                    </div> 
                </div>       
            </div>
        </div>  
        <br>
        
<!---------------------------------------------carrito------------------------------------------------------>

        

<div class="carrito">
    <div class="container mb-3" id="carrito">
    <div><br><br><br></div>
        <h1>Productos</h1>
        
        <div class="linea"></div>
        
        <div class="container" >
            <br>
            <?php if($mensaje!=""){?>
            <div class="alert alert-primary">
            <?php echo $mensaje;?>
                <a href="mostrarCarrito.php" class="badge badge-primary text-dark" >Ver carrito</a>
            </div>
            <?php }?>
        </div>

        <div class="row ">
            <?php
                $sentencia=$pdo->prepare("SELECT*FROM productos");
                $sentencia->execute();
                $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);

            ?>

            <?php foreach($listaProductos as $producto){ ?>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-1 p-1">
                    <div class="container-fluid mb-5"  > 
                        <div class="card shadow" > 
                            <img 
                            title="<?php echo $producto['Nombre'];?>"
                            alt="<?php echo $producto['Nombre'];?>"
                            class="card-img-top" 
                            src="<?php echo $producto['Imagen'];?>"
                            
                            >

    <!-----------------------------interactuo con la base de datos------------------------------->
                            
                            <div class="card-body">
                                <span><?php echo $producto['Nombre'];?></span>
                                    <h5 class="card-title">$<?php echo $producto['Precio'];?></h5>
                                    <p  class="card-text"></p>
                                
    <!------------------------sumar productos al carrito de compras-------------------------------->

                                <form action="" method="post">
                                    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">
                                    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>">
                                    
                                    
                                    <button class="btn btn-primary" 
                                        name="btnAccion" 
                                        value="Agregar" 
                                        type="submit">                             
                                            Agregar al Carrito
                                        </button>
                                </form>                                        
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            
        </div>
    </div>  
</div>  

<!------------------------------------------------nosotros------------------------------------------------->       
    <div class="nosotros" id="nosotros">
        <br><br>
        <h1>Nosotros</h1>
        <div class="linea"></div>
        <div class="container d-flex align-content-center justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-6 col-md-6 bg-primary px-0">
                    <img src="./Imagenes/en_proceso.jpeg" alt="#" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6 col-md-6 bg-dark text-white">
                    <h2> Macetas, color y diseño.</h2>
                    <p>Divertidos diseños, artesanales. </p>
                    <p>Cada diseño esta elaborado de manera artesanal con materiales de excelente calidad y durabilidad.</p>
                        Dale un poco de color a tu hogar.
                    </p>
                    <button type="button" class="btn border-light text-white">Conoce Más</button>                        
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------contacto-------------------------------------------->

    <div class="contacto">
        <div class="container-flex justify-content-center">
            <div class="container-flex col-sm-12 text-center mx"  id="contacto">
            <div><br><br><br></div>
                <h1>Contacto</h1>
                <div class="linea"></div>
                <br>
                <h4>Queremos conocer tu opinion. Cuéntanos de te parece!!</h4><br>  
                <form action="show_data.html" method="post" target="_blank" >
                    <div class="container col-12 col-lg-6 col-md-6">
                        <label for="firstname"></label> <input size="25" type="text" name="firstname" placeholder="Nombre" > 
                        <label for="Lastname"></label> <input size="25" type="text" name="Lastname" placeholder="Apellido" >
                        <br>  <br>  
                        <label for="comentarios"></label> <textarea name="comentarios" rows="5" cols="30" placeholder="Dejanos tu comentario o sugerencia" ></textarea>
                        <br>
                    <div>
                </form>
            </div> 
            <button type="button" class="btn btn-outline-primary"><a class="nav-link  rounded js-scroll-trigger" href="mailto:laulelu@gmail.com" target="_blank">Enviar <i class="fas fa-sign-in-alt"></i> </a></button>
        </div>
        <br>
    </div>


<!---------------------------------------------pie de pagina------------------------------------------------------>

    <footer>
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
            <div class="container-fluid justify-content-center">
                <ul class="navbar-nav "><li class="nav-item">
                        <a class="nav-link"></a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Preguntas frecuentes <i class="fas fa-info-circle"></i></a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contáctenos <i class="fas fa-comments"></i></a></li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://www.instagram.com/funny_flowerpot/" >Seguinos en las redes <i class="fas fa-camera-retro"></i></a></li>
                </ul>
            </div>
        </nav>
    </footer>
</div>                   
</body>

</html>
