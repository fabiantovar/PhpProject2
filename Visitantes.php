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
            form.action = "Controlador/VisitantesC.php?accion=" + accion;

            var d = document.getElementById("Id");
            var pn = document.getElementById("Pnombre");
            var pa = document.getElementById("Papellido");
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
            var d = document.getElementById("Id").value;
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function () {
                try {
                    myObj = JSON.parse(this.responseText);//[1013,Juan,Milena,Herrera,García,jua@h.com]
                    document.getElementById("Pnombre").value = myObj[1];
                    document.getElementById("Papellido").value = myObj[2];
                    document.getElementById("telefono").value = myObj[3];
                } catch (e) {
                    document.getElementById("Pnombre").value = "";
                    document.getElementById("Papellido").value = "";
                    document.getElementById("telefono").value = "";
                    alert(this.responseText);

                }

            }
            xmlhttp.open("POST", "Controlador/VisitantesC.php");
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("accion=consultar&Id=" + d);

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
                    <td><label for="Id"><b>Identificación</b></td>
                    <td><input type="number" id="Id" name="Id"></td>
                </tr>
                <tr>
                    <td><label for="Pnombre"><b>Primer nombre</b></td>
                    <td><input type="text" id="Pnombre" name="Pnombre"></td>
                </tr>

                <tr>
                    <td><label for="Papellido"><b>Primer apellido</b></td>
                    <td><input type="text" id="Papellido" name="Papellido"></td>
                </tr>

                <tr>
                    <td><label for="telefono"><b>telefono</b></td>
                    <td><input type="number" id="telefono" name="Telefono"></td>
                </tr>
                <tr>
                    <td><input type="button" value="Guardar" class="btn btn-primary" onclick="enviarF('Guardar')"></td>
                    <td><input type="button" value="Actualizar" class="btn btn-primary" onclick="enviarF('Actualizar')"></td>
                </tr>
                <tr>
                    <td><input type="button" value="eliminar" class="btn btn-secondary" onclick="enviarF('eliminar')"></td>
                    <td><input type="button" value="consultar" class="btn btn-secondary" onclick="enviarF('consultar')"></td> 
                </tr>
            </table>

        </form>

    </body>
</html>

