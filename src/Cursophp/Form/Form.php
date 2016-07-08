<?php

namespace Cursophp\Form {

    class Form extends FormFields {

        private $form_id;
        private $fields;
        private $method = "post";
        private $action;
        private $has_file = false;
        protected $fields_build;

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

        public function addField($args) {
            $this->fields[] = $args;
            return $this;
        }

        public function build($echo_form = true) {
            foreach ($this->fields as $val) {
                $this->fields_build[] = self::$val['type']($val);
            }

            return $this->mountForm($echo_form);
        }

        protected function mountForm($show) {
            $has_file = (!$this->has_file) ? null : 'enctype="multipart/form-data"';
            $form = "<form name=\"{$this->form_id}\" id=\"{$this->form_id}\" action=\"{$this->action}\" method=\"{$this->method}\" {$has_file}>";
            foreach ($this->fields_build as $field) {
                $form .= $field . "<br />";
            }
            $form .= "</form>";

            if ($show)
                echo $form;
            return $form;
        }

    }

}
