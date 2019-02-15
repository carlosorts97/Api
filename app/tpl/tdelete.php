<?php
include 'head_common.php';
?>

    <h1>Borrar tareas</h1>

    <form action="/X-master/delete/taskdelete" method="post">
        <div class="cajastotal">
            <input type="text" name="idborrar" placeholder="ID tarea" />
            <input type="submit" value="Borrar" />
            <a id="Exit" href="/X-master/panel">Atras</a>
        </div>

    </form>

<?php
include 'footer_common.php';
?>