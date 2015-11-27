<?php

class PessoaJuridica extends Pessoa {

    private $CNPJ;

    function __construct($nome, $email, $cnpj, $endereco, $grauImportancia) {
        $this->setNome($nome);
        $this->setEndereco($endereco);
        $this->setEmail($email);
        $this->CNPJ = $cnpj;
        $this->setTipo("Pessoa Juridica");
        $this->grauImportancia($grauImportancia);
    }
    
    function getDoc(){
        return $this->CNPJ;
    }
}
