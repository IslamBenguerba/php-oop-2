<?php 

require_once __DIR__ .'./Prodotto.php';

class Gioco {
    use Prodotto;
    protected $materiale;

    function __construct($_titoloProdotto,$_prezzoProdotto,$_animale,$_materiale){
        $this->setTitoloProdotto($_titoloProdotto);
        $this->setPrezzoProdotto($_prezzoProdotto);
        $this->setAnimale($_animale);
        $this->setMateriale($_materiale);
    }



    /**
     * Get the value of materiale
     */
    public function getMateriale()
    {
        return $this->materiale;
    }

    /**
     * Set the value of materiale
     */
    public function setMateriale($materiale): self
    {
        $this->materiale = $materiale;

        return $this;
    }
}

?>