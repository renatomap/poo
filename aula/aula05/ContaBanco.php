<?php
  class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function abrirConta($t) {
      $this->setTipo($t);
      $this->setStatus(true);
      if($t == "CC") {
        $this->setSaldo(50);
      }else {
        $this->setSaldo(150);
      }
    }
    public function fecharConta($s) {
      if($this->saldo > 0) {
        echo "Conta com dinhrito.";
      }elseif($this->saldo < 0) {
        echo "Conta dom débito.";
      } else {
        $this->setStatus(false);
      }
    }
    public function depositar($v) {
      if($this->status = true) {
        // $this->saldo += $v;
        $this->setSaldo($this->getSaldo() + $v);
      } else {
        echo "Impossível depositar";
      }
    }
    public function sacar($v) {
      if($this->status = true) {
        if($this->saldo > $v) {
          $this->saldo -= $v;
        }else {
          echo "Saldo insuficiente";
        }
      }else {
        echo "Impossível sacar.";
      }
    }
    public function pagarMensal($v) {
      if($this->tipo = "CC") {
        $v = 12;
      }else {
        $v = 20;
      }
      if($this->status = true) {
        if($this->saldo > $v) {
          $this->saldo -= $v;
        }else {
          echo "Saldo insuficiente";
        }
      }else {
        echo "Impossível pagar";
      }
    }
    public function __construct() {
      $this->saldo = 0;
      $this->status = false;
    }
    function getnumConta() {
      return $this->numConta;
    }
    function setnumConta($n) {
      $this->numConta = $n;
    }
    function getTipo() {
      return $this->tipo;
    }
    function setTipo($t) {
      $this->tipo = $t;
    }
    function getDono() {
      return $this->dono;
    }
    function setDono($d) {
      $this->dono = $d;
    }
    function getSaldo() {
      return $this->saldo;
    }
    function setSaldo($s) {
      $this->saldo = $s;
    }
    function getStatus() {
      return $this->status;
    }
    function setStatus($st) {
      $this->status = $st;
    }
  }
?>  