<?php
class Caderno {
  private $modelo;
  private $folha;
  private $tamanho;
  private $fechado;
  
  function __construct($m, $f, $t) {
    $this->modelo = $m;
    $this->folha = $f;
    $this->tamanho = $t;
    $this->fechar(true);
  }
  function fechar() {
    $this->fechado = true;
  }
  function getModelo() {
    return $this->modelo;
  }
  function setModelo($m) {
    $this->modelo = $m;
  }
  function getFolha() {
    return $this->folha;
  }
  function setFolha($f) {
    $this->folha = $f;
  }
  function getTamanho() {
    return $this->tamanho;
  }
  function setTamanho($t) {
    $this->tamanho = $t;
  }
}
?>