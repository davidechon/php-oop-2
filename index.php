<!-- nome repo: php-oop-2
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.

L'e-commerce vende prodotti per gli animali.

I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.

Il pagamento avviene con la carta di credito, che non deve essere scaduta.

BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->
<?php
require_once __DIR__.'/Classes/Prodotto.php';

$prodotto1 = new Prodotto('croccantini', 'gatto', 2.80);
$prodotto2 = new Prodotto('bocconcini', 'cane', 1.20);
$prodotto3 = new Prodotto('semi misti', 'roditori', 3.5);
$prodotto4 = new Prodotto('esca viva', 'volatili', 15);
var_dump($prodotto1);
var_dump($prodotto2);
var_dump($prodotto3);
var_dump($prodotto4);



// $cliente1 = new Cliente('Masamoto', 'Musashi', 'mamu@gmail.com', 1234567890123456, '07/03/2023','--');
// $cliente2 = new Cliente('Ryoma', 'Nagare', 'ryna@gmail.com', 1234561234567890, '03/07/2023', 'premium');
// var_dump($cliente1);

// $scontrino1 = new Scontrino('bocconcini', 'gatto', 'lorem ipsum', 4);
// $scontrino2 = new Scontrino('croccantini', 'gatto', 'lorem ipsum', 2);
// var_dump($scontrino1);
// var_dump($scontrino2);



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php OOP-2</title>
</head>
<body>
<h1>Elenco Prodotti</h1>
  <div>
  <!-- <h2> <?php echo $prodotto->getNome().' '.$proprietario1->getCognome()  ?> </h2> -->
    <ul>
    <?php foreach($prodotto1->getProdotti() as $value){  ?>
      <li> <?php echo $value->getNome().' € '.$value->getPrezzo().' ' ?> </li>
    <?php } ?>
    </ul>
  </div>
  
</body>
</html>