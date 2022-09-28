<?php

require_once("models/alquila_model.php");
require_once("utils/alquila_util.php");

    class alquila_controllers{
        private $tarifa,  $dias, $preciox;

        public static function Mostrar(){
            $tarifa=20;


            $dias=rand(1,10);
            
            $autos[] = new alquila_model(0, "Honda", "S2000 AP2", $tarifa, $dias, alquila_util::Operaciones($tarifa, $dias), "img\honda_s2000_celeste_1.jpeg", "mostrar.php", "img\honda_s2000_celeste_1.jpeg", "img\honda_s2000_celeste_2.jpeg", "img\honda_s2000_celeste_3.jpeg", "img\honda_s2000_celeste_4.jpeg");

            $dias=rand(1,10);

            $autos[] = new alquila_model(1, "Toyota", " Hilux 2020", $tarifa, $dias, alquila_util::Operaciones($tarifa, $dias), "img\-toyota_hilux_chocolate_1.jpg", "mostrar.php", "img\-toyota_hilux_chocolate_1.jpg", "img\-toyota_hilux_chocolate_2.jpg", "img\-toyota_hilux_chocolate_3.jpg", "img\-toyota_hilux_chocolate_4.jpg");

            $dias=rand(1,10);

            $autos[] = new alquila_model(2, "Hyundai", "Accent 2020", $tarifa, $dias, alquila_util::Operaciones($tarifa, $dias), "img\hyundai_accent_rojo_1.jpg", "mostrar.php", "img\hyundai_accent_rojo_1.jpg", "img\hyundai_accent_rojo_2.jpg", "img\hyundai_accent_rojo_3.jpg", "img\hyundai_accent_rojo_4.jpg");

            $dias=rand(1,10);

            $autos[] = new alquila_model(3, "Ford", "Mustang 2015", $tarifa, $dias, alquila_util::Operaciones($tarifa, $dias), "img\-ford_mustang_rojo_1.jpg", "mostrar.php", "img\-ford_mustang_rojo_1.jpg", "img\-ford_mustang_rojo_2.jpg", "img\-ford_mustang_rojo_3.jpg", "img\-ford_mustang_rojo_4.jpg");

            $dias=rand(1,10);

            $autos[] = new alquila_model(4, "Toyota", "Prado Land Crusier", $tarifa, $dias, alquila_util::Operaciones($tarifa, $dias), "img\_toyota_prado_land_Cruisier_gris_1.jpg", "mostrar.php", "img\_toyota_prado_land_Cruisier_gris_1.jpg", "img\_toyota_prado_land_Cruisier_gris_2.jpg", "img\_toyota_prado_land_Cruisier_gris_3.jpg", "img\_toyota_prado_land_Cruisier_gris_4.jpg");
            
            $dias=rand(1,10);

            $autos[] = new alquila_model(5, "Isuzu", "D-max", $tarifa, $dias, alquila_util::Operaciones($tarifa, $dias), "img\isuzu_dmax_blanco_1.jpg", "mostrar.php", "img\isuzu_dmax_blanco_1.jpg", "img\isuzu_dmax_blanco_2.jpg", "img\isuzu_dmax_blanco_3.jpg", "img\isuzu_dmax_blanco_4.jpg");

            return $autos;
            
        }

    }


?>