<?php

/**
 * Description of pessoaFisica
 *
 * @author Douglas Alves
 */

namespace Cursophp {

    class PessoaFisica extends Pessoa {

        private $CPF;

        function __construct($nome, $email, $cpf, $endereco, $grauImportancia) {
            $this->setNome($nome);
            $this->setEndereco($endereco);
            $this->setEmail($email);
            $this->CPF = $cpf;
            $this->setTipo("Pessoa Fisica");
            $this->grauImportancia($grauImportancia);
        }

        function getDoc() {
            return $this->CPF;
        }

    }

}
