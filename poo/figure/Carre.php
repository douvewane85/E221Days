<?php 
namespace App\FIGURE ;
use App\FIGURES\Figure ;
class Carre extends Figure{

    //Redefinition
    public function surface(){
       return $this->dimension*$this->dimension;
    }
    public function perimetre(){
        return $this->dimension*4;
    }
    
}