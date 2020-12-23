<?php 
namespace App\FIGURES ;
abstract class Figure implements FigureInterface{

    protected $forme;
    protected $dimension;
    protected $unite;


    

    /**
     * Get the value of forme
     */ 
    public function getForme()
    {
        return $this->forme;
    }

    /**
     * Set the value of forme
     *
     * @return  self
     */ 
    public function setForme($forme)
    {
        $this->forme = $forme;

        return $this;
    }

    /**
     * Get the value of dimension
     */ 
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * Set the value of dimension
     *
     * @return  self
     */ 
    public function setDimension($dimension)
    {
        $this->dimension = $dimension;

        return $this;
    }

    /**
     * Get the value of unite
     */ 
    public function getUnite()
    {
        return $this->unite;
    }

    /**
     * Set the value of unite
     *
     * @return  self
     */ 
    public function setUnite($unite)
    {
        $this->unite = $unite;

        return $this;
    }

        
    
}