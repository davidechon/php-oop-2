<?php
require_once __DIR__.'/Categoria.php';
class Prodotto extends Categoria{
  protected $nome;
  protected $descrizione;
  protected $prezzo;

function __construct($_nome, $_descrizione, $_prezzo, $_categorie=[])
{
  $this->nome = $_nome;
  $this->descrizione = $_descrizione;
  $this->prezzo = $_prezzo;

  parent::__construct($_categorie);
  $this->categorie = $_categorie;
}

public function getNome(){
  return $this->nome;
}
public function setNome($_nome){
  $this->nome = $_nome;
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

public function getCategorie(){
  return $this->categorie;
}
public function setCategorie($_categorie){
  $this->categorie = $_categorie;
}

}
?>