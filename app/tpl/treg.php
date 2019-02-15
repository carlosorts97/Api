<?php
include 'head_common.php';
?>
    <body class="bregistrar">
        <h1>Registro</h1>
        <div class="cajastotal">
        <form action="/X-master/reg/reg2" method="post">

                <div>
                    <p>Nombre usuario: </p><input type="text" name="nom">
                </div>
                <div>
                    <p>Contraseña: </p><input type="password" name="pass1">
                </div>
                <div>
                    <p>Repite contraseña:</p> <input type="password" name="pass2">
                </div>

                <div id="boton1">
                    <input type="submit" name="enviar" value="Registrar" id="entrar">
                </div>
        </form>
            <a href="/X-master">Atrás</a>
        </div>

<?php
include 'footer_common.php';
?>