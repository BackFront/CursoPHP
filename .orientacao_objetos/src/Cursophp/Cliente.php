<?php

/**
 * @author Douglas
 */

namespace Cursophp {

    class Cliente {

        private $client;

        public function __construct($client) {
            $this->client = $client;
        }

        public function getCliente() {
            return $this->client;
        }

    }

}
