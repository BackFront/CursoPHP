<?php

/**
 * @author Douglas
 */
class Cliente {

    private $client;

    public function __construct($client) {
        $this->client = $client;
    }
    
    public function getCliente(){
        return $this->client;
    }
}
