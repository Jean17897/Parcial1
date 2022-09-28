<?php

    require_once("models/usuario.php");

    class usuario_controller{

        public static function Mostrarautos(){
            $obj_autos[] = new usuario(1,"Audi","Audi Q8 2022","");
            $obj_autos[] = new usuario(2,"BMW","BMW X5 2022","");
            $obj_autos[] = new usuario(3,"Mercedes","Mercedes GLA 2022","");
            return $obj_autos;
        }

    }