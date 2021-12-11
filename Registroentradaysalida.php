<!<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/popper.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
       
    <tilte></tilte>
    <script type="text/javascript">
        function enviarF(accion) {
            var form = document.enviar;
            form.action = "Controlador/EntradaySalidaC.php?accion=" + accion;

            var d = document.getElementById("personaid");  
            var pn = document.getElementById("placavehiculo");
            var pa = document.getElementById("parqueadero");
            var sub = true;
            if ("Guardar") {
                if (d.value == "") {
                    sub = false;
                    d.style = "border-color:red;";


                }

                if (pn.value == "") {
                    sub = false;
                    pn.style = "border-color:red;";




                }
                if (pa.value == "") {
                    sub = false;
                    pa.style = "border-color:red;";
                }

            }
            if (accion == "Eliminar") {
                f(d.value == "")
                sub = false;
                d.style = "border-color:red;";

            }
            if (sub) {
                form.submit();
            }
                 if (isset($_POST[consultar]))
            {
                include("abrir_conexion.php");
                $personaid($_POST ['personaid']);
                $entrada($_POST ['entrada']);
                $salida($_POST ['salida']);
                $placavehiculo($_POST ['placavehiculo']);
                $parqueadero($_POST ['parqueadero']);
                
                
               $resultados= mysqli_query($conn,"SELECT * FROM $Registroentradaysalida WHERE personaid=$personaid");
               while($consulta=mysqli_fetch_array($resultados))
              
               {
             echo $consulta['personaid'];
             echo "<br>";
             echo $consulta['entrada'];
             echo "<br>";
             echo $consulta['salida'];
             echo "<br>";
             echo $consulta['placavehiculo'];
             echo "<br>";
             echo $consulta['parqueadero'];
             echo "<br>";
               }
               Include("cerra_conn.php");
                
            }

        }




    </script>

    <style type="text/css">



        input{
            padding: 5px;
            text-align: center;
            font-family: arial;
        }
        #tabla4{
            border: 1px  solid black;
            padding: 5px;
            p.solid {border-style: solid;}
        }

    </style>



    <body>

        <form action="" method="post" name="enviar">
            <table id="tabla4">

                <tr>
                    <td><label for="entrada">Hora de entrada</td>
                    <td><input type="datetime"id="entrada"name="entrada"></td>
                </tr>
                <tr>
                    <td><label for="salida">Hora de salida</td>
                    <td><input type="datetime"id="salida"name="salida"></td>
                </tr>
                
                <tr>
                    <td><label for="personaid">Identificacion persona</td>
                    <td><input type="text"id="personaid"name="personaid"></td>
                </tr>
                <tr>
                    <td><label for="placavehiculo">Placa del Vehiculo</td>
                    <td><input type="text"id="placavehiculo"name="placavehiculo"></td>
                </tr>
                <tr>
                    <td><label for="parqueadero">Numero de parqueadero</td>
                    <td><input type="number"id="parqueadero"name="parqueadero"></td>
                </tr>
               
                <tr>
                    
                    <td><input type="button" value="Guardar" class="btn btn-info" onclick="enviarF('Guardar')"></td>
                    <td><input type="submit" value="Actualizar" class="btn btn-info" onclick="enviarF('Actualizar')"></td>
                </tr>
                <tr>
                    <td><input type="button" value="eliminar" class="btn btn-warning" onclick="enviarF('eliminar')"></td>
                    <td><input type="button" value="consultar" class="btn btn-warning" onclick="enviarF('consultar')"></td> 
                </tr>
            </table>

        </form>




    </body>
</html>


