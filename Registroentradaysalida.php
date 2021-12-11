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
            form.action = "Controlador/EntradaysalidaC.php?accion=" + accion;

            var d = document.getElementById("personaid");
            var pn = document.getElementById("placavehiculo");
            var pa = document.getElementById("entrada");
            var s = document.getElementById("salida");
            var p = document.getElementById("parqueadero");
            var sub = true;
            if (accion == "Guardar") {

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
                if (s.value == "") {
                    sub = false;
                    s.style = "border-color:red;";
                }
                if (p.value == "") {
                    sub = false;
                    p.style = "border-color:red;";
                }

                }
                if (accion == "eliminar") {
                    if (d.value == "")
                        sub = false;
                    d.style = "border-color:red;";

                }
                if (accion == "Actualizar") {
                    if (d.value == "")
                        sub = false;
                    d.style = "border-color:red;";
                }
                if (accion == "consultar") {
                    if (d.value == "")
                        d.style = "border-color:red;";
                    sub = false;
                    ajax();
                }
                if (sub) {


                    form.submit();
                }

            }
            function ajax() {
                var d = document.getElementById("personaid").value;
                const xmlhttp = new XMLHttpRequest();
                xmlhttp.onload = function () {
                    try {
                        myObj = JSON.parse(this.responseText);//[1013,Juan,Milena,Herrera,García,jua@h.com]
                        document.getElementById("placavehiculo").value = myObj[1];
                        document.getElementById("entrada").value = myObj[2];
                        document.getElementById("salida").value = myObj[3];
                        document.getElementById("parqueadero").value = myObj[4];

                    } catch (e) {
                        document.getElementById("placavehiculo").value = "";
                        document.getElementById("entrada").value = "";
                        document.getElementById("salida").value = "";
                        document.getElementById("parqueadero").value = "";
                        alert(this.responseText);

                    }

                }
                xmlhttp.open("POST", "Controlador/EntradaysalidaC.php");
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("accion=consultar&personaid=" + d);

            }

    </script>

    <style type="text/css">



        input{
            padding: 5px;
            text-align: center;
            font-family: arial;
        }
        #tabla8{
            border: 1px  solid black;
            padding: 5px;
            p.solid {
                border-style: solid;
            }
        }

    </style>



    <body>

        <form action="" method="post" name="enviar">
            <table id="tabla8">

                <tr>
                    <td><label for="personaid">Identificación</td>
                    <td><input type="number" id="personaid" name="personaid"></td>
                </tr>
                <tr>
                    <td><label for="placavehiculo">Placa Vehiculo</td>
                    <td><input type="text" id="placavehiculo" name="placavehiculo"></td>
                </tr>

                <tr>
                    <td><label for="entrada">Entrada</td>
                    <td><input type="datetime-local" id="entrada" name="entrada"></td>
                </tr>

                <tr>
                    <td><label for="salida">Salida</td>
                    <td><input type="datetime-local" id="salida" name="salida"></td>
                </tr>
                
                <tr>
                    <td><label for="parqueadero">Parqueadero</td>
                    <td><input type="number" id="parqueadero" name="parqueadero"></td>
                </tr>
                <tr>
                    <td><input type="button" value="Guardar" class="btn btn-primary" onclick="enviarF('Guardar')"></td>
                    <td><input type="button" value="Actualizar" class="btn btn-primary" onclick="enviarF('Actualizar')"></td>
                </tr>
                <tr>
                    <td><input type="button" value="eliminar" class="btn btn-success" onclick="enviarF('eliminar')"></td>
                    <td><input type="button" value="consultar" class="btn btn-success" onclick="enviarF('consultar')"></td> 
                </tr>
            </table>

        </form>

    </body>
</html>

