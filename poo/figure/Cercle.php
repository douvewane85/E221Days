<?php 

class  Cercle extends Figure{
    private $diametre;
    private const PI=3.14;


    //Redefinition
    public function surface(){
        return self::PI*$this->dimension*$this->dimension;
     }
     public function perimetre(){
         return self::PI*$this->dimension*2;
     }
}