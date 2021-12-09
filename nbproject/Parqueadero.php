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
            form.action = "Controlador/ParqueaderoC.php?accion=" + accion;

            var d = document.getElementById("numero");  
            var pn = document.getElementById("disponible");
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
        #tabla3{
            border: 1px  solid black;
            padding: 5px;
            p.solid {border-style: solid;}
        }

    </style>



    <body>

        <form action="" method="post" name="enviar">
            <table id="tabla3">

                <tr>
                    <td><label for="numero">Número de Parqueadero</td>
                    <td><input type="number"id="id"name="numero"></td>
                </tr>
                <tr>
                    <td><label for="disponibible">Disponible</td>
                    <td><input type="text"id="a"name="disponible"></td>
                </tr>
                
                
                    
                    <td><input type="button" value="Guardar"class="btn btn-info"onclick="enviarF('Guardar')"></td>
                    <td><input type="submit" value="Actualizar"class="btn btn-info"onclick="enviarF('Actualizar')"></td>
                </tr>
                <tr>
                    <td><input type="button" value="eliminar"class="btn btn-warning" onclick="enviarF('eliminar')"></td>
                    <td><input type="button" value="consultar"class="btn btn-warning"onclick="enviarF('consultar')"></td> 
                </tr>
            </table>

        </form>




    </body>
</html>




