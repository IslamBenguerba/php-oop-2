<?php 

class Gatto {
    protected $genere;


    function __construct($_genere){
        $this->setGenere($_genere);
    }
    /**
     * Get the value of genere
     */
    public function getGenere()
    {
        return $this->genere;
    }

    /**
     * Set the value of genere
     */
    public function setGenere($genere): self
    {   
        
        $this->genere = $genere;

        return $this;
    }
}

?>