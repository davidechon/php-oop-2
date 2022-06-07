<?php
require_once __DIR__.'/Prodotto.php';

class Scontrino extends Prodotto {
  protected $scontrini;

  function __construct($_nome, $_categoria,  $_descrizione, $_prezzo, $_scontrini=[])
  {
    parent::__construct($_nome, $_categoria, $_descrizione, $_prezzo);
    $this->scontrini = $_scontrini;
  }
  public function getScontrini(){
    return $this->scontrini;
  }
  public function setScontrini($_scontrini){
    $this->scontrini[] = $_scontrini;
  }

}
?>