<?php

namespace Cursophp\Form {

    class Form extends FormFields {

        private $form_id;
        private $fields = array();
        private $method = "post";
        private $action;
        private $has_file = false;

        function __construct($form_id) {
            $this->form_id = $form_id;
        }

        public function setMethod($method = "post") {
            $this->method = $method;
            return $this;
        }

        public function setAction($action) {
            $this->action = $action;
            return $this;
        }

        public function hasFile($i = true) {
            $this->has_file = $i;
            return $this;
        }

        public function addField(array $args) {
            $this->fields[] = $args;
            return $this;
        }

        public function build() {
            foreach ($this->fields as $val) {
                echo "<pre>";
                var_dump($val);
                echo "</pre>";
                echo "<hr />";
            }
            return $this;
        }

    }

}
