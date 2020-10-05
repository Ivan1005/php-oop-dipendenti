<?php
require_once __DIR__.'/../traits/Show.php';
class Dipendenti {
    use ShowGet;
    protected $codiceFiscale;
    public $nome;
    public $cognome;
    private $iban;
    protected $contratto;

    public function __construct($_nome,$_cognome,$_codiceFiscale,$_iban){
      $this->nome = $_nome;
      $this->cognome = $_cognome;
      $this->codiceFiscale = $_codiceFiscale;
      $this->iban = $_iban;
    }

    public function setCodiceF($_codiceFiscale){
      $this->codiceFiscale = $_codiceFiscale;
    }

    public function setIban($_iban){
      $this->iban = $_iban;
    }

    public function setContratto($_contratto){
      $this->contratto = $_contratto;
    }

    public function getCodiceF(){
      if(empty($this->codiceFiscale)){
        die('error b');
      }elseif(!is_string($this->codiceFiscale)){
        die('error b');
      }
      return $this->codiceFiscale;
    }
    public function getIban(){
      if(empty($this->iban)){
        die('error b');
      }elseif(!is_string($this->iban)){
        die('error b');
      }
      return $this->iban;
    }
    public function getContratto(){
      if(empty($this->contratto)){
        die('error b');
      }elseif(!is_string($this->contratto)){
        die('error b');
      }
      return $this->contratto;
    }
}
