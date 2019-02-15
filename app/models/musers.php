<?php

	namespace X\App\Models;

	use \X\Sys\Model;

	class mUsers extends Model{
		public function __construct(){
			parent::__construct();
			
		}

        public function login($nom,$pass){
            $sql="SELECT * FROM user WHERE username='".$nom."' && pass='".md5($pass)."';";

           // $res=$this->query($sql);
            $this->query($sql);
            $this->execute();
            $total=$this->rowCount($sql);

            if($total>=1)
            {
                    header('Location: /X-master/panel');

            }else {

                echo "<script type='text/javascript'>alert('No existe el user');</script>";
            }

        }
	}