<?php

class CapiReparto extends Dipendenti {
  private $codicePermesso;
  public function __construct($_nome,$_cognome,$_codiceFiscale,$_iban,$_codicePermesso){
  parent::__construct($_nome,$_cognome,$_codiceFiscale,$_iban);
  $this->codicePermesso = $_codicePermesso;
  }

  public function setcodicePermesso($_codicePermesso){
    $this->codicePermesso = $_codicePermesso;
  }
  public function getcodicePermesso(){
    if(empty($this->codicePermesso)){
      die('error b');
    }
    return $this->codicePermesso;
  }

}
