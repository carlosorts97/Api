<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 14/01/19
 * Time: 17:13
 */

namespace X\App\Models;


use X\Sys\Model;

class mAdd extends Model
{
    public function __construct(){
        parent::__construct();

    }
    function taskadd($nomt,$desc,$est)
    {

        if (isset($_POST) &&
            !empty($nomt) &&
            !empty($desc) &&
            !empty($est)) {


        $usuario = $_SESSION['user'];
        $idsql = "SELECT iduser FROM user WHERE username='.$usuario.'";
        $res = $this->query($idsql);
            $res=$this->execute();
        $sql = "INSERT INTO `task` (`idtask`, `name`, `state`, `text`, `user`)
        VALUES
        (NULL, '" . $nomt . "','" . $est . "','" . $desc . "','" . $res . "')";
        $this->query($sql);
            $this->execute();
        header('Location: /X-master/panel');

    }else{
            echo 'Tarea no añadida';
        }
    }


}