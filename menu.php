<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                
                <img src="img/foto1.jpeg" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
                
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="Residentes.php.">Residentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Visitantes.php">Registro Personas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Parqueadero.php">Parqueadero</a>
                        </li>  
                         <li class="nav-item">
                             <a class="nav-link" href="Registroentradaysalida.php">Registro IN - OUT</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="Asignacion.php">Asignacion</a>
                        </li>
                        </li>  
                         <li class="nav-item">
                             <a class="nav-link" href="index_1.php">Salir</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid mt-3">
            <h3>SAVECAR</h3>
            <p>Tener presente cualquier documento.</p>
        </div>
        <div class="container">
            
        
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
       
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/foto4.jpeg" alt="Carros" class="thumbnail float" width="1500px" height="630px">
                <div class="carousel-caption">
                    <h3>CARROS</h3>
                    
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/foto2.jpeg" alt="Motos" class="thumbnail float" width="1500px" height="630px">
                <div class="carousel-caption">
                    <h3>MOTOCICLETAS</h3>
                    
                </div> 
            </div>
            <div class="carousel-item">
                <img src="img/foto3.jpeg" alt="Bicicletas" class="thumbnail float" width="1500px" height="630px">
                <div class="carousel-caption">
                    <h3>BICICLETAS</h3>
                   
                </div>  
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
        </div>
</body>
</html>