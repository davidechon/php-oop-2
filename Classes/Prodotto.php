<?php
class Prodotto{
  public $nome;
  public $categoria;
  public $prezzo;

  function __construct($_nome, $_categoria, $_prezzo)
  {
    $this->nome = $_nome;
    $this->categoria = $_categoria;
    $this->prezzo = $_prezzo;
  }
  public function getNome(){
    return $this->nome;
  }
  public function getCategoria(){
    return $this->categoria;
  }
  public function getPrezzo(){
    return $this->prezzo;
  }

  public function setNome($_nome)
  {
    $this->nome = $_nome;
  }
  public function setCategoria($_categoria)
  {
    $this->categoria = $_categoria;
  }
  public function setPrezzo($_prezzo)
  {
    $this->prezzo = $_prezzo;
  }
}


?>
