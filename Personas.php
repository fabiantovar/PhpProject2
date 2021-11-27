<!<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
    <tilte></tilte>
    <script type="text/javascript">
        function enviarF(accion) {
            var form = document.enviar;
            form.action = "Controlador/PersonasC.php?accion=" + accion;

            var d = document.getElementById("Documento");
            var pn = document.getElementById("Pnombre");
            var pa = document.getElementById("Papellido");
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
            font-family: cursive;
        }
        #tabla1{
            border: 1px  solid black;
            padding: 5px;
        }

    </style>



    <body>

        <form action="" method="post" name="enviar">
            <table id="tabla1">

                <tr>
                    <td><label for="Documento">Documento</td>
                    <td><input type="number"id="Documento"name="Documento"></td>
                </tr>
                <tr>
                    <td><label for="Pnombre">Primer nombre</td>
                    <td><input type="text"id="Pnombre"name="Pnombre"></td>
                </tr>
                <tr>
                    <td><label for="Snombre">Segundo  nombre</td>
                    <td><input type="text"id="Snombre"name="Snombre"></td>

                </tr>
                <tr>
                    <td><label for="Papellido">Primer apellido</td>
                    <td><input type="text"id="Papellido"name="Papellido"></td>
                </tr>
                <tr>
                    <td><label for="Sapellido">Segundo apellido</td>
                    <td><input type="text"id="Sapellido"name="Sapellido"></td>
                </tr>
                <tr>
                    <td><label for="email">email</td>
                    <td><input type="text"id="email"name="email"></td>
                </tr>
                <tr>
                    <td><input type="button" value="Guardar"onclick="enviarF('Guardar')"></td>
                    <td><input type="submit" value="Actualizar"onclick="enviarF('Actualizar')"></td>
                </tr>
                <tr>
                    <td><input type="button" value="eliminar"onclick="enviarF('eliminar')"></td>
                    <td><input type="button" value="consultar"onclick="enviarF('consultar')"></td> 
                </tr>
            </table>

        </form>




    </body>
</html>

