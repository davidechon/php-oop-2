<?php
class Cliente{
  protected $nome;
  protected $cognome;
  protected $email;
  protected $carta;
  protected $scadenza;
  protected $premium;

  

  function __construct($_nome, $_cognome, $_email, $_carta, $_scadenza, $_premium)
  {
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->email = $_email;
    $this->carta = $_carta;
    $this->scadenza = $_scadenza;
    $this->premium = $_premium;
  }


  public function getNome(){
    return $this->nome;
  }
  public function setNome($_nome){
    $this->nome = $_nome;
  }

  public function getCognome(){
    return $this->cognome;
  }
  public function setCognome($_cognome){
    $this->cognome = $_cognome;
  }

  public function getEmail(){
    return $this->email;
  }
  public function setEmail($_email){
    if(!strpos($_email,'@')){
      throw new Exception('Email non valida! ');
    }  $this->email = $_email;
  }
  public function getCarta(){
    return $this->carta;
  }
  public function setCarta($_carta){
    $this->carta = $_carta;
  } 
  public function getScadenza(){
    return $this->scadenza;
  }
  public function setscadenza($_scadenza){
    $this->scadenza = $_scadenza;
  }
  public function getPremium(){
    return $this->premium;
  }
  public function setPremium($_premium){
    $this->premium = $_premium;
  }
  
  // public function getPremium(){
  //   return $this->premium;
  // }
  // public function setPremium($_premium){
  //   $this->premmium = $_premium;
  // }
}
?>