<?php

class Movie {
    public $nome;
    public $anno;
    public $age;

    public function __construct( $_nome, $_anno, $_age ){
     $this -> nome = $_nome; 
     $this -> anno = $_anno; 
     $this -> age = $_age; 
    }

    public function perTutti(){
        if( $this -> age > 18  ){
            return "La visione del film è riservata ad un pubblico di soli adulti";
        } else {
            return "La visione del film è stata autorizzata";
        }
    }

}



?>