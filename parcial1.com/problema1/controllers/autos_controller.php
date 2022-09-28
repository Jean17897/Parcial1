<?php

    require_once("models/autos.php");

    class autos_controller{

        public static function Mostrarautos(){
            $obj_autos[] = new autos(1,"Audi","Audi Q8 2022",250000,$dias=rand(1,10),$pg= $dias * 250000);
            $obj_autos[] = new autos(2,"BMW","BMW X5 2022",300000,$dias=rand(1,10),$pg= $dias * 300000);
            $obj_autos[] = new autos(3,"Mercedes","Mercedes GLA 2022",270000,$dias=rand(1,10),$pg= $dias * 270000);
            return $obj_autos;
        }

    }