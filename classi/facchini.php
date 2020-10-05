<?php

class Facchini extends Dipendenti{
  public $camion;
  protected $bolla;

  public function __construct($_nome,$_cognome,$_codiceFiscale,$_iban,$_bolla){
    parent::__construct($_nome,$_cognome,$_codiceFiscale,$_iban);
    $this->bolla = $_bolla;
  }

  public function setBolla($_bolla){
    $this->bolla = $_bolla;
  }
  public function getBolla(){
    if(empty($this->bolla)){
      die('error b');
    }
    return $this->bolla;
  }

}
