<?php
trait ShowGet{
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
