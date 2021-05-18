<?php


class magazzino extends products
{
 private $quantita;

       public function setQuantita($quantita)
    {
        $this->quantita = $quantita;
    }

    public function getQuantita()
    {
        return $this->quantita;
    }
}
