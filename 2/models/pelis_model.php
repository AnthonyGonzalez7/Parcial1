<?php


    class pelis_model{
        private $id, $peli_nombre, $peli_contexto, $peli_calificacion, $peli_portada_link, $peli_trailer_link, $peli_resumen;
        public function __Construct($id, $peli_nombre, $peli_contexto, $peli_calificacion, $peli_portada_link, $peli_trailer_link, $peli_resumen){
                $this->id=$id;
                $this->peli_nombre=$peli_nombre;
                $this->peli_contexto=$peli_contexto;
                $this->peli_calificacion=$peli_calificacion;
                $this->peli_portada_link=$peli_portada_link;
                $this->peli_trailer_link=$peli_trailer_link;
                $this->peli_resumen=$peli_resumen;
        }


        public function setId($id){
            $this->id=$id;
        }
        public function setPeli_nombre($peli_nombre){
            $this->peli_nombre=$peli_nombre;
        }   
        public function setPeli_contexto($peli_contexto){
            $this->peli_contexto=$peli_contexto;
        }
        public function setPeli_calificacion($peli_calificacion){
            $this->peli_calificacion=$peli_calificacion;    
        }
        public function setPeli_portada_link($peli_portada_link ){
            $this->peli_portada_link=$peli_portada_link;
        }
        public function setPeli_trailer_link($peli_trailer_link ){
            $this->peli_trailer_link=$peli_trailer_link;
        }
        public function setPeli_resumen($peli_resumen ){
            $this->peli_resumen=$peli_resumen;
        }


        public function getId(){
            return $this->id;
        }
        public function getPeli_nombre(){
            return  $this->peli_nombre;
        }
        public function getPeli_contexto(){
            return $this->peli_contexto;
        }
        public function getPeli_calificacion(){
            return $this->peli_calificacion;
        }
        public function getPeli_portada_link(){
            return $this->peli_portada_link;
        }
        public function getPeli_trailer_link(){
            return $this->peli_trailer_link;
        }
        public function getPeli_resumen(){
            return $this->peli_resumen;
        }


    }



?>
