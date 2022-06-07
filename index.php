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
    <h2> <?php echo $prodotto1->getNome().' '.$proprietario1->getCognome()  ?> </h2>
    <ul>
    <?php foreach($proprietario1->getAppartamenti() as $appartamenti){  ?>
      <li> <?php echo $appartamenti->getNome().' € '.$appartamenti->getPrezzo().' ' ?> </li>
    <?php } ?>
    </ul>
  </div>
  
</body>
</html>