<?php


trait paymentMethods
{
 private $tipo;
 private $codice_cc;
 private $scadenza_cc;
 private $cvv2;
 private $status;

    //SETTERS
    public function setPaymentMethod($tipo, $scadenza, $cvv2, $codicecc)
    {
        $this->tipo = $tipo;
        $this->scadenza_cc = $scadenza;
        $this->cvv2 = $cvv2;
        $this->codice_cc = $codicecc;

    }

 public function verifyPayment () {
        if ($this->tipo == 'VISA' || $this->tipo == 'MASTERCARD' || $this->tipo == 'BITCOIN') {
            $this->status = true;
            return ('Carta accettata, pagamento in elaborazione %');
        } else {
            throw new Exception('Carta rifiutata! Aggiungi un metodo di pagamento tra i seguenti: VISA||MASTERCARD||BITCOIN');
        }

    }
}
