<!<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/popper.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript">
    <tilte></tilte>
    <script type="text/javascript">
        function enviarF(accion) {
            var form = document.enviar;
            form.action = "Controlador/Roles.php?accion=" + accion;

            var d = document.getElementById("Id");  
            var pn = document.getElementById("rol");
           
            var sub = true;
            if ("Guardar") {
                if (d.value == "") {
                    sub == false;
                    d.style = "border-color:red;";


                }

                if (pn.value == "") {
                    sub == false;
                    pn.style = "border-color:red;";




                }
                if (pa.value == "") {
                    sub == false;
                    pa.style = "border-color:red;";
                }

            }
            if (accion == "Eliminar") {
                f(d.value == "")
                sub == false;
                d.style = "border-color:red;";

            }
            if (sub) {
                form.submit();
            }


        }




    </script>

    <style type="text/css">



        input{
            padding: 5px;
            text-align: center;
            font-family: arial;
        }
        #tabla5{
            border: 1px  solid black;
            padding: 5px;
            p.solid {border-style: solid;}
        }

    </style>



    <body>

        <form action="" method="post" name="enviar">
            <table id="tabla5">

                <tr>
                    <td><label for="Id">Identificación</td>
                    <td><input type="number"id="Id"name="Id"></td>
                </tr>
                
                
                <tr>
                    <td><label for="rol">Clase de Usuario</td>
                    <td><input type="text"id="rol"name="rol"></td>
                </tr>
               
                <tr>
                    
                    <td><input type="button" value="Guardar"class="btn btn-success"onclick="enviarF('Guardar')"></td>
                    <td><input type="submit" value="Actualizar"class="btn btn-success"onclick="enviarF('Actualizar')"></td>
                </tr>
                <tr>
                    <td><input type="button" value="eliminar"class="btn btn-info" onclick="enviarF('eliminar')"></td>
                    <td><input type="button" value="consultar"class="btn btn-info"onclick="enviarF('consultar')"></td> 
                </tr>
            </table>

        </form>




    </body>
</html>




