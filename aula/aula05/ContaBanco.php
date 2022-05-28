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
        echo "<p>Conta CC aberta</p>";
      }else if($t == "CP") {
        $this->setSaldo(150);
      echo "<p>Conta CP aberta</p>";
      }
    }
    public function fecharConta($s) {
      if($this->getSaldo() > 0) {
        echo "Conta com dinhrito.";
      }elseif($this->getSaldo() < 0) {
        echo "Conta dom débito.";
      } else {
        $this->setStatus(false);
        echo "<p>Conta de " .$this->getDono. " foi fechada.</p>";
      }
    }
    public function depositar($v) {
      if($this->getStatus()) {
        // $this->saldo += $v;
        $this->setSaldo($this->getSaldo() + $v);
        echo "<p>Depósito de R$ " .$v. " na conta do " .$this->getDono(). "</p>";
      } else {
        echo "Impossível depositar";
      }
    }
    public function sacar($v) {
      if($this->getStatus()) {
        if($this->getSaldo() >= $v) {
          $this->setSaldo($this->getSaldo() - $v);
          echo "<p>Saque de R$ ".$v." autorizado da conta da ". $this->getDono()." </p>";
        }else {
          echo "Saldo insuficiente";
        }
      }else {
        echo "Impossível sacar.";
      }
    }
    public function pagarMensal() {
      // let $v = 0;
      if($this->getTipo() == "CC") {
        $v = 12;
      }else if($this->getTipo() == "CP") {
        $v = 20;
      }
      if($this->getStatus()) {
        if($this->getSaldo() >= $v) {
          $this->setSaldo($this->getSaldo() - $v);
          echo "<p>Mensalidade de R$ " .$v. " debitada na conta de " .$this->getDono(). "</p>";
        }else {
          echo "<p>Problema com a conta. Não posso cobrar.</p>";
        }
      }
    }
    public function __construct() {
      $this->setSaldo(0);
      $this->setStatus = false;
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