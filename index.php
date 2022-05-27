<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <title>Funny FlowerPot by Laulelu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="Style.css" rel="stylesheet" type="text/css"/>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./Imagenes/logo_ico.jpg" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="./ej-index2js.js" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    
</head>

<body>

    <div class="wnd-page l-page cs-gray ac-none t-btn-fw-l t-nav-fw-l t-pd-fw-l">
		<div id="wrapper" class="l-w cf t-04">

			<div class="l-bg cf">
				<div class="s-bg-l">
                    
					
				</div>
				<div class="s-bg-l s-bg-lo"></div>
			</div>
<!-------------------------------------------------Navegacion--------------------------------------------->

<!-------------------------------------------------
    <header>

        <nav class="navbar navbar-expand-sm navbar-light bg-light justify-content-center fixed-top ">
            <div class="container-fluid">
                <a class="navbar-brand"></a>
                <button class="navbar-toggler" data-target="#my-nav" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand"><img src="./Imagenes/logo vector-4.png" width="50px" class="rounded-pill"></a>
                <div id= "my-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#categoria1">Galeria</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Productos</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#carrito">Carrito</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
-------------------------------------------->

        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-target="#my-nav"  data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand"><img src="./Imagenes/logo vector-4.png" width="50px" class="rounded-pill"></a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        <a class="nav-link" href="#categoria1">Galeria</a>
                        <a class="nav-link" href="index.php">Productos</a>
                        <a class="nav-link" href="#nosotros">Nosotros</a>
                        <a class="nav-link" href="#contacto">Contacto</a>
                        <a class="nav-link" href="#carrito">Carrito</a>
                    </div>
                </div>
            </div>
        </nav>
        
    </header>

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

    <!-------------------------------------------------------------------------------------------->

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
        <div><br><br><br></div>

        <div class="carrito">
            <div class="container mb-3" id="carrito">
                <h1>Carrito</h1>
                
                <div class="linea"></div>
                
                <div class="container" >
                    <br>
                    <div class="alert alert-primary">
                    <?php echo $mensaje;?>
                        <a href="#" class="badge badge-primary text-dark" >Ver carrito</a>
                    </div>
                </div>

                <div class="row ">
                    <?php
                        $sentencia=$pdo->prepare("SELECT*FROM productos");
                        $sentencia->execute();
                        $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                        //print_r($listaProductos);
                    ?>

                    <?php foreach($listaProductos as $producto){ ?>
                        <div class="col-md-6 col-lg-3 mb-1 p-1">
                            <div class="container-fluid mb-5"  >
                                <div class="card" > 
                                    <img class="img-fluid"
                                    title="<?php echo $producto['Nombre'];?>"
                                    alt="<?php echo $producto['Nombre'];?>"
                                    class="card-img-top" 
                                    src="<?php echo $producto['Imagen'];?>"
                                    >

                <!--interactuo con la base de datos-->
                                    
                                    <div class="card-body">
                                        <span><?php echo $producto['Nombre'];?></span>
                                            <h5 class="card-title">$<?php echo $producto['Precio'];?></h5>
                                            <p  class="card-text"></p>
                                        
                    <!--sumar productos al carrito de compras-->

                                        <form action="" method="post">
                                            <input type="text" name="id" id="id" value="<?php echo $producto['ID'];?>">
                                            <input type="text" name="nombre" id="nombre" value="<?php echo $producto['Nombre'];?>">
                                            <input type="text" name="precio" id="precio" value="<?php echo $producto['Precio'];?>">
                                            <input type="text" name="cantidad" id="cantidad" value="<?php echo 1;?>">

                                            <button class="btn btn-primary" 
                                                name="btnAction" 
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
                    
                    

                <!--
                    <div class="col-md-6 col-lg-3 mb-1 p-1">
                            <div class="container-fluid mb-5" >
                                <div class="card"> 
                                    <img class="img-fluid"
                                    title="Black"
                                    alt="Titulo"
                                    class="card-img-top" 
                                    src="./Imagenes/03_black.jpeg">
                                    <div class="card-body">
                                        <h5 class="card-title">$300</h5>
                                        <pc  class="card-text">Descripcion</p>
                                        <button class="btn btn-primary" 
                                        name="btnAction" 
                                        value="Agregar" 
                                        type="submit">
                                            Agregar al Carrito</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-1 p-1">
                            <div class="container-fluid mb-5" >
                                <div class="card"> 
                                    <img class="img-fluid"
                                    title="Flower"
                                    alt="Titulo"
                                    class="card-img-top" 
                                    src="./Imagenes/07_flowers2.jpeg">
                                    <div class="card-body">
                                        <h5 class="card-title">$300</h5>
                                        <pc  class="card-text">Descripcion</p>
                                        <button class="btn btn-primary" 
                                        name="btnAction" 
                                        value="Agregar" 
                                        type="submit">
                                            Agregar al Carrito</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-1 p-1">
                            <div class="container-fluid mb-5" >
                                <div class="card"> 
                                    <img class="img-fluid"
                                    title="Watermelon"
                                    alt="Titulo"
                                    class="card-img-top" 
                                    src="./Imagenes/20_sandias.jpeg">
                                    <div class="card-body">
                                        <h5 class="card-title">$300</h5>
                                        <pc  class="card-text">Descripcion</p>
                                        <button class="btn btn-primary" 
                                        name="btnAction" 
                                        value="Agregar" 
                                        type="submit">
                                            Agregar al Carrito</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                -->

                </div>
            </div>  
        </div>  
                


        <!----------------------------------nosotros-------------------------------------------->       
            <div class="nosotros">
                <div class="row mt-5 p-5 " id="nosotros">
                <div><br><br></div>
                    <h1>Nosotros</h1>
                    <div class="linea"></div>
                    <main class="container d-flex align-content-center justify-content-center">
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
                    </main>
                </div>
            </div>

        <!----------------------------------contacto-------------------------------------------->

            <div class="contacto">
                <div class="container-flex justify-content-center">
                    <div class="container-flex col-sm-12 text-center mx"  id="contacto">
                    <div><br><br><br></div>
                        <h1>Contacto</h1>
                        <div class="linea"></div>
                        <br>
                        <h6>DEJANOS TU OPINION O SUGERENCIA</h6>
                        <h6>Queremos conocer tu opinion. Cuéntanos de te parece!!</h6><br>  
                        <form action="show_data.html" method="post" target="_blank" >
                            <div class="container ">
                                <label for="firstname"></label> <input size="20" type="text" name="firstname" placeholder="Nombre" > 
                                <label for="Lastname"></label> <input size="20" type="text" name="Lastname" placeholder="Apellido" >
                                <br>  <br>  
                                <label for="comentarios"></label> <textarea name="comentarios" rows="5" cols="60" placeholder="Sobre que quieres hablar?" ></textarea>
                                <br>
                            <div>
                        </form>
                    </div>
                    <button type="button" class="btn btn-outline-primary btn-block"><a class="nav-link  rounded js-scroll-trigger" href="mailto:laulelu@gmail.com" target="_blank">Enviar</button>
                </div>
            </div>

        

    <!---------------------------------------------pie de pagina------------------------------------------------------>

            <footer>
                <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
                <div><br><br><br><br></div>
                    <div class="container-fluid justify-content-center">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Preguntas frecuentes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contáctenos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" target="_blank" href="https://www.instagram.com/funny_flowerpot/" >Seguinos en las redes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Términos y condiciones</a>
                            </li>
                        </ul>
                    </div>
                </nav>   
            </footer>
        </div>
        </div>
    </div>

</body>

</html>
