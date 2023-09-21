<?php
require_once __DIR__ .'./Prodotto.php';
class Cuccia extends Prodotto{
    protected $altezza;
    protected $largezza;
    protected $profondita;
    protected $materiale;

    function __construct($_titoloProdotto,$_prezzoProdotto,$_animale,$_materiale,$_altezza,$_larghezza,$_profondita,$_cover){
        $this->setTitoloProdotto($_titoloProdotto);
        $this->setPrezzoProdotto($_prezzoProdotto);
        $this->setAnimale($_animale);
        $this->setMateriale($_materiale);
        $this->setAltezza($_altezza);
        $this->setLargezza($_larghezza);
        $this->setProfondita($_profondita);
        $this->setImmagineProdotto($_cover);
    }

    /**
     * Get the value of altezza
     */
    public function getAltezza()
    {
        return $this->altezza;
    }

    /**
     * Set the value of altezza
     */
    public function setAltezza($altezza): self
    {
        $this->altezza = $altezza;

        return $this;
    }

    /**
     * Get the value of largezza
     */
    public function getLargezza()
    {
        return $this->largezza;
    }

    /**
     * Set the value of largezza
     */
    public function setLargezza($largezza): self
    {
        $this->largezza = $largezza;

        return $this;
    }

    /**
     * Get the value of profondita
     */
    public function getProfondita()
    {
        return $this->profondita;
    }

    /**
     * Set the value of profondita
     */
    public function setProfondita($profondita): self
    {
        $this->profondita = $profondita;

        return $this;
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

