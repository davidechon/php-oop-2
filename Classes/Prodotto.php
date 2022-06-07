<?php
class Prodotto {
  protected $nome;
  protected $categoria;
  protected $descrizione;
  protected $prezzo;


function __construct($_nome, $_categoria, $_descrizione, $_prezzo)
{
  $this->nome = $_nome;
  $this->categoria = $_categoria;
  $this->descrizione = $_descrizione;
  $this->prezzo = $_prezzo;
}

public function getNome(){
  return $this->nome;
}
public function setNome($_nome){
  $this->nome = $_nome;
}
public function getCategoria(){
  return $this->categoria;
}
public function setCategoria($_categoria){
  $this->categoria = $_categoria;
}
public function getDescrizione(){
  return $this->descrizione;
}
public function setDescrizione($_descrizione){
  $this->descrizione = $_descrizione;
}
public function getPrezzo(){
  return $this->prezzo;
}
public function setPrezzo($_prezzo){
  $this->prezzo = $_prezzo;
}

}
?>