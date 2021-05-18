<link rel="stylesheet" href="./master.css">
<?php
require './paymentMethods.php';
require './user.php';

require './products.php';
require './magazzino.php';


$user = new User('Lorenzo', 'Jovanotti', '22/03/1962', 'Via Nazareno Lanzirotti 32', 'JVNLRN22A26H792G');


echo "
<table>
<thead>
<tr>
<th>Nome</th><th>Cognome</th><th>Data di nascita</th><th>indirizzo</th><th>CF</th>
</tr>
</thead>
<tr>
<td>".$user->getNome()."</td><td>".$user->getCognome()."</td><td>".$user->getDataDiNascita()."</td><td>".$user->getIndirizzo()."</td><td>".$user->getCodiceFiscale()."</td>
</tr>
</table>
";
//payment method

$user->setPaymentMethod('TERCARD', '10/12/2018', '122', '5333166632345335');
try {
    echo "Validità metodo di pagamento: " . $user->verifyPayment();
} catch (Exception $e) {
    echo "Errore! " . $e->getMessage();
}

$item1 = new magazzino();
$item1->setId(1);
$item1->setDescrizione('Apple Watch 3');
$item1->setPrezzo('299');
$item1->setQuantity('2');

var_dump($item1->productInfo());
