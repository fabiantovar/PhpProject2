!<!doctype html>
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
            form.action = "Controlador/ResidentesC.php?accion=" + accion;

            var d = document.getElementById("placa");  
            var pn = document.getElementById("modelo");
            var pa = document.getElementById("tipo");
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
        #tabla7{
            border: 1px  solid black;
            padding: 5px;
            p.solid {border-style: solid;}
        }

    </style>



    <body>

        <form action="" method="post" name="enviar">
            <table id="tabla7">

                <tr>
                    <td><label for="placa">Placa</td>
                    <td><input type="text"id="Id"name="placa"></td>
                </tr>
                <tr>
                    <td><label for="modelo">Modelo</td>
                    <td><input type="number"id="modelo"name="modelo"></td>
                </tr>
                
                <tr>
                    <td><label for="tipo">Clase de vehiculo</td>
                    <td><input type="text"id="tipo"name="tipo"></td>
                </tr>
                <tr>
                    <td><label for="color">Color</td>
                    <td><input type="text"id="color"name="color"></td>
                </tr>
                <tr>
                    <td><label for="marca">Marca de vehiculo</td>
                    <td><input type="text"id="marca"name="marca"></td>
                </tr>
               
                <tr>
                    
                    <td><input type="button" value="Guardar"class="btn btn-info"onclick="enviarF('Guardar')"></td>
                    <td><input type="submit" value="Actualizar"class="btn btn-info"onclick="enviarF('Actualizar')"></td>
                </tr>
                <tr>
                    <td><input type="button" value="eliminar"class="btn btn-secondary" onclick="enviarF('eliminar')"></td>
                    <td><input type="button" value="consultarclass="btn btn-secondary"onclick="enviarF('consultar')"></td> 
                </tr>
            </table>

        </form>




    </body>
</html>



