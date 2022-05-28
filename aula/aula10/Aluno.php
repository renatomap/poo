<?php
  require_once 'Pessoa.php';
  class Aluno extends Pessoa {
    private $matri;
    private $curso;

    public function cancelarMatri() {
      echo '<p>Matricula será cancelada</p>';
    }
    public function getMatri() {
      return $this->matri;
    }
    public function getCurso() {
      return $this->curso;
    }
    public function setMatri($matri) {
      $this->matri = $matri;
    }
    public function setCurso($curso) {
      $this->curso = $curso;
    }
  }

?>