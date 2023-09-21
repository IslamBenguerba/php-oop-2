<?php
require_once __DIR__ . '/Cane.php';
require_once __DIR__ . '/Gatto.php';

class Prodotto
{
    protected $titoloProdotto;
    protected $prezzoProdotto;
    protected $Animale;
    protected $immagineProdotto;
    protected $immagineAnimal;
    function __construct($_titoloProdotto, $_prezzoProdotto, $_Animale)
    {
        $this->setTitoloProdotto($_titoloProdotto);
        $this->setPrezzoProdotto($_prezzoProdotto);
        $this->setAnimale($_Animale);
    }


    /**
     * Get the value of titoloProdotto
     */
    public function getTitoloProdotto()
    {

        return $this->titoloProdotto;
    }

    /**
     * Set the value of titoloProdotto
     */
    public function setTitoloProdotto($titoloProdotto): self
    {
        $titoloProdotto = ucfirst(strtolower($titoloProdotto));
        $this->titoloProdotto = $titoloProdotto;

        return $this;
    }

    /**
     * Get the value of prezzoProdotto
     */
    public function getPrezzoProdotto()
    {
        return $this->prezzoProdotto;
    }

    /**
     * Set the value of prezzoProdotto
     */
    public function setPrezzoProdotto($prezzoProdotto): self
    {
        if (is_numeric($prezzoProdotto)) {
            if (strstr($prezzoProdotto, '.')) {
                $prezzo = str_replace('.', ',', $prezzoProdotto) . ' Euro';
            }
            $this->prezzoProdotto = $prezzo;
        } else {
            echo 'il prezzo non è valido';
        }

        return $this;
    }

    /**
     * Get the value of Animale
     */
    public function getAnimale()
    {

        return $this->Animale;
    }

    /**
     * Set the value of Animale
     */
    public function setAnimale($Animale): self
    {
        if ($Animale === 'Cane') {
            $target = new Cane('Cane');
            $Animale = $target->getGenere();
            $this->immagineAnimal = 'https://us.123rf.com/450wm/cnuisin/cnuisin2001/cnuisin200100273/137436430-cane-zampa-vettore-icona-impronta-bulldog-francese-personaggio-dei-cartoni-animati-simbolo.jpg?ver=6';
        } elseif ($Animale === 'Gatto') {
            $target = new Gatto('Gatto');
            $Animale = $target->getGenere();
            $this->immagineAnimal = 'https://www.educolor.it/disegno-da-colorare-zampa-di-gatto-dl18727.jpg';
        }
        $this->Animale = $Animale;

        return $this;
    }

    /**
     * Get the value of immagineProdotto
     */
    public function getImmagineProdotto()
    {
        return $this->immagineProdotto;
    }

    /**
     * Set the value of immagineProdotto
     */
    public function setImmagineProdotto($immagineProdotto): self
    {
        $this->immagineProdotto = $immagineProdotto;

        return $this;
    }

    /**
     * Get the value of immagineAnimal
     */
    public function getImmagineAnimal()
    {
        return $this->immagineAnimal;
    }
}
