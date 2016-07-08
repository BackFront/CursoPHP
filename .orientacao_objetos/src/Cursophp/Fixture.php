<?php namespace Cursophp
{
    class Fixture extends \Cursophp\Database
    {

        private $entity;

        public function persists(Cliente $entity)
        {
            $this->entity = $entity->getCliente();
            return $this;
        }

        public function getEntity()
        {
            return $this->entity;
        }

        public function flush()
        {
            $cli['nome'] = $this->entity->getNome();
            $cli['email'] = $this->entity->getEmail();
            $cli['endereco'] = $this->entity->getEndereco();
            $cli['doc'] = $this->entity->getDoc();
            $cli['importancia'] = $this->entity->getGrauImportancia();
            $cli['tipo'] = $this->entity->getTipo();
            return parent::QRInsert("cliente", $cli)->getResult();
        }

        public function getClient($clientId = null)
        {
            if(empty($clientId)){
                return $this->getAllClients();
            } else {
                return parent::QRSelect("cliente", "WHERE id={$clientId}")->getResult();
            }
        }

        public function getAllClients()
        {
            return parent::QRSelect("cliente")->getResult();
        }

    }

}
