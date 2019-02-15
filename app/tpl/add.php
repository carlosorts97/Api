<?php
include 'head_common.php';
?>
<h1>Crear Tarea</h1>

<form action="<?= $SERVER['PHP_SELF'];?>" method="post">
    <div class="cajastotal">
        <div><p>Nombre tarea:</p> <input type="text" name="nom"></div>
        <div> <p>Descripcion:</p> <input type="text" name="desc"></div>
        <div><p>Estado:</p><SELECT id="sele" NAME="list">
                <OPTION > A medias </OPTION>
                <OPTION > Recien comenzada </OPTION>
                <OPTION > Finalizada </OPTION>
            </SELECT></div>
        <div id="boton">
            <input type="submit" name="enviar" value="Crear Tarea">
        </div>
        <a id="Exit" href="/X-master/panel">Salir</a>
    </div>

</form>

<?php
include 'footer_common.php';
?>