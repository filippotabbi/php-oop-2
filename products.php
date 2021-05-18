<?php


class products
{
 protected $id;
 protected $descrizione;
 protected $prezzo;

 public function __constructor($id, $desc, $prezzo, $quantity){
    $this->id = $id;
    $this->descrizione =$desc;
    $this->prezzo =$prezzo;
    $this->quantity =$quantity;
 }

    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
 public function productInfo() {
     $tmpArray = [
         "id" => $this->id,
         "descrizione" => $this->descrizione,
         "prezzo" => $this->prezzo,
         "quantity" => $this->quantity];
              return $tmpArray;
 }
}
