<?php
include 'head_common.php';
?>
    <h1>Modificar tarea</h1>
    <div class="cajastotal">
        <form action="/X-master/modificar/taskmod" method="post">
            <a>ID:</a><input type="text" name="idborrar" placeholder="ID Tarea a Modificar" /><br>
            <a>Nuevo Estado:</a><SELECT id="sele" NAME="list">
                <OPTION > A medias</OPTION>
                <OPTION > Recien comenzada</OPTION>
                <OPTION > Finalizada </OPTION>
            </SELECT><br>
            <input type="submit" value="Modificar" /><br>


    </form>
        <a id="Exit" href="/X-master/panel">Salir</a>
    </div>

<?php
include 'footer_common.php';
?>