<?php 
class Categoria {
  protected $nome;

  function __construct($_nome)
  {
    $this->nome = $_nome;
  }

  public function getNome(){
    return $this->nome;
  }
  public function setNome($_nome){
    $this->nome = $_nome;
  }
}

?>
