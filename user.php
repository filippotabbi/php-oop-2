<?php

class User
{
    use PaymentMethods;
    private $nome;
    private $cognome;
    private $dataDiNascita;
    private $indirizzo;
    private $codiceFiscale;
    //CONSTRUCTOR
    function __construct($nome, $cognome, $dataDiNascita, $indirizzo, $codiceFiscale) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->dataDiNascita = $dataDiNascita;
        $this->indirizzo = $indirizzo;
        $this->codiceFiscale = $codiceFiscale;
    }
    //SETTERS
    public function setCodiceFiscale($codiceFiscale)
    {
        $this->codiceFiscale = $codiceFiscale;
    }
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;
    }
    public function setDataDiNascita($dataDiNascita)
    {
        $this->dataDiNascita = $dataDiNascita;
    }
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    //GETTERS
    public function getNome()
    {
        return $this->nome;
    }
    public function getCodiceFiscale()
    {
        return $this->codiceFiscale;
    }
    public function getCognome()
    {
        return $this->cognome;
    }
    public function getDataDiNascita()
    {
        return $this->dataDiNascita;
    }
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }
}
