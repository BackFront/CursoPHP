<?php

class Pessoa {

    private $Nome;
    private $Email;
    private $tipo;
    private $Endereco;
    private $GrauImportancia;

    public function getNome() {
        return $this->Nome;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setNome($nome) {
        $this->Nome = $nome;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function setEmail($Email) {
        $this->Email = $Email;
    }

    public function getEndereco() {
        return $this->Endereco;
    }

    public function setEndereco($Endereco) {
        $this->Endereco = $Endereco;
    }
    
    public function getGrauImportancia() {
        return $this->GrauImportancia;
    }
    
    public function grauImportancia($grauImportancia) {
        $this->GrauImportancia = $grauImportancia;
    }

}
