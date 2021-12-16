<!DOCTYPE html><html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title></title>
        <style>
            <img src="../../../Users/fatom/Downloads/savecar5.jpeg" alt=""/>
            .divider:after,
            .divider:before {
                content: "";
                flex: 1;
                height: 10px;
                background: #eee;
            }
        </style>
        <style type="text/css">
            body{
                background-image: url("img/savecar5.jpeg");
                background-size: cover;
                background-position: center;
                width: 100%;
                height: 100vh;


            }


            ul li a{
                color:black;
                text-decoration: none;
            }
            ul li{
                list-style: none;
                float: left;
                width: 86px;
            }
            nav{
                width: 100%;
                height: 34px;
                background-color: #1b6ae1;
                padding-top: 1px;
                padding-bottom: 17px;
            }

        </style>
    </head>


    <div class="container">
        <div class="row justify-content-center">

            <div class="col-sm-8">

            </div>


            <div class="col-sm-4">



                <h1>INICIAR SESION</h1>

            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action="controlador/login.php" method="post">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="number" id="usuario" name="usuario" class="form-control form-control-lg" />
                            <label class="form-label" for="usuario">Usuario</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="clave" name="clave" class="form-control form-control-lg" />
                            <label class="clave" for="clave">Contraseña</label>
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value=""
                                    id="form1Example3"
                                    checked
                                    />
                                <label class="form-check-label" for="form1Example3"> Recordarme </label>
                            </div>
                            <a href="#!">¿Olvidaste tu contraseña?</a>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Ingresar</button>

                        <div class="divider d-flex align-items-center my-4">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>