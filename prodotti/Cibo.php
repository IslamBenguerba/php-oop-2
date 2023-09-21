<?php
require_once __DIR__.'/Prodotto.php';
class Cibo extends Prodotto
{
    
    protected $PesoAlimento;
    
    function __construct($_titoloAlimento,$_prezzoProdotto,$_PesoAlimento, $_animale,$cover){
        $this->setTitoloProdotto($_titoloAlimento);
        $this->setPrezzoProdotto($_prezzoProdotto);
        $this->setPesoAlimento($_PesoAlimento);
        $this->setAnimale($_animale);
        $this->setImmagineProdotto($cover);
    }
    /**
     * Get the value of PesoAlimento
     */
    public function getPesoAlimento()
    {
        return $this->PesoAlimento;
    }

    /**
     * Set the value of PesoAlimento
     */
    public function setPesoAlimento($PesoAlimento): self
    {
        if(is_numeric($PesoAlimento)){ 
            $this->PesoAlimento = $PesoAlimento;
        }else{
            echo 'valore del peso non corretto.';
        }

        return $this;
    }
}


?>