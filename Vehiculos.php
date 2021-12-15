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
            form.action = "Controlador/VehiculosC.php?accion=" + accion;

            var d = document.getElementById("placa");
            var mo = document.getElementById("modelo");
            var ti = document.getElementById("tipo");
            var co = document.getElementById("color");
            var ma = document.getElementById("marca");

            var sub = true;
            if (accion == "Guardar") {

                if (d.value == "") {
                    sub = false;
                    d.style = "border-color:red;";
                }

                if (mo.value == "") {
                    sub = false;
                    mo.style = "border-color:red;";

                }
                if (ti.value == "") {
                    sub = false;
                    ti.style = "border-color:red;";
                }

                if (co.value == "") {
                    sub = false;
                    co.style = "border-color:red;";
                }

                if (ma.value == "") {
                    sub = false;
                    ma.style = "border-color:red;";
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
            var d = document.getElementById("placa").value;
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function () {
                try {
                    myObj = JSON.parse(this.responseText);//[1013,Juan,Milena,Herrera,García,jua@h.com]
                    document.getElementById("placa").value = myObj[0];
                    document.getElementById("modelo").value = myObj[1];
                    document.getElementById("tipo").value = myObj[2];
                    document.getElementById("color").value = myObj[3];
                    document.getElementById("marca").value = myObj[4];
                } catch (e) {
                    document.getElementById("placa").value = "";
                    document.getElementById("modelo").value = "";
                    document.getElementById("tipo").value = "";
                    document.getElementById("color").value = "";
                    document.getElementById("marca").value = "";
                    alert(this.responseText);

                }

            }
            xmlhttp.open("POST", "Controlador/VehiculoC.php");
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("accion=consultar&placa=" + d);

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
                    <td><label for="placa"><b>Placa</b></td>
                    <td><input type="text" id="placa" name="placa"></td>
                </tr>
                <tr>
                    <td><label for="modelo"><b>Modelo</b></td>
                    <td><input type="text" id="modelo" name="modelo"></td>
                </tr>

                <tr>
                    <td><label for="marca"><b>Marca</b></td>
                    <td><input type="text" id="marca" name="marca"></td>
                </tr>

                <tr>
                    <td><label for="color"><b>Color</b></td>
                    <td><input type="text" id="color" name="color"></td>
                </tr>
                <tr>
                    <td><label for="tipo"><b>Tipo</b></td>
                    <td>
                        <select id="tipo" name="tipo">
                            
                        
                        <?php
                        require_once 'Controlador/conexion.php';
                        $sql="select * from tipos_vehiculos";
                       $result= $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                               echo '<option value="'.$row['id'].'">'.$row['tipo'].'</option>';
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                        ?>
                        
                        </select>
                        </td>
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


