<?php

/**
 * @author Douglas
 */
class Cliente {

    private $Nome;
    private $Email;
    private $CPF;
    private $Endereco;

    public function __construct($nome, $email, $cpf, $endereco) {
        $this->Nome = $nome;
        $this->Email = $email;
        $this->CPF = $cpf;
        $this->Endereco = $endereco;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function getCPF() {
        return $this->CPF;
    }

    public function getEndereco() {
        return $this->Endereco;
    }
    
    public function getEmail() {
        return $this->Email;
    }

    public function setNome($Nome) {
        $this->Nome = $Nome;
    }

    public function setCPF($CPF) {
        $this->CPF = $CPF;
    }

    public function setEndereco($Endereco) {
        $this->Endereco = $Endereco;
    }
    
    public function setEmail($Email) {
        $this->Email = $Email;
    }

}
