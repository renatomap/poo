<?php
  class Controle {
    var $cor;
    var $tamanho;
    var $botao;
    var $carga;

    function funcionar() {
      if($this->carga == true) {
        echo "<p>Pode ligar! Com carga!</p>";
      } else {
        echo "<p>Não pode ligar! Sem carga!</p>";
      }
  }
  function ligar() {
    $this->carga = true;
  }
  function desligar() {
    $this->carga = false;
  }
  }
?>