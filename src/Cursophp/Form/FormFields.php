<?php

namespace Cursophp\Form {

    class FormFields {

        public function __call($name, $arguments) {
            echo "O field de tipo {$name} nao pode ser gerado";
        }

        static function text($args) {
            $arg_b = null;
            foreach ($args as $key => $value) {
                if ($key != 'label') {
                    if (is_array($value)) {
                        $value = implode(" ", $value);
                    }
                    $arg_b .= "{$key}=\"{$value}\" ";
                } else {
                    $label = $value;
                }
            }

            $field = "<label for=\"{$args['id']}\">{$label}: </label>";
            $field .= "<input type=\"text\" {$arg_b} />";
            return $field;
        }

        static function checkbox($args) {
            $arg_b = null;
            $fields = null;
            foreach ($args as $key => $value) {
                if (is_array($value)) {
                    $value = implode(" ", $value);
                }
                $arg_b .= "{$key}=\"{$value}\" ";
            }

            $fields .= "<input type=\"checkbox\" {$arg_b}>";
            $fields .= "<label for=\"{$args['id']}\"> {$args['label']}</label><br />";
            return $fields;
        }

        static function radio($args) {
            $fields = "{$args['label']} <br />";
            foreach ($args['options'] as $key => $value) {
                $fields .= "<input type=\"radio\" name=\"{$args['id']}\" id=\"{$key}\" value=\"{$key}\" " . self::is_selected($args['id'], $args['check'], 'check') . " />";
                $fields .= "<label for=\"{$key}\"> {$value}</label><br />";
            }
            return $fields;
        }

        static function select($args) {
            $args_b = null;
            $fields = "<label for=\"{$args['id']}\"> {$args['label']}</label><br />";
            foreach ($args as $key => $value) {
                if (is_array($value)) {
                    $value = implode(" ", $value);
                }
                $args_b .= "{$key}=\"{$value}\" ";
            }

            $fields .= "<select {$args_b}>";
            foreach ($args['options'] as $key => $value) {
                $fields .= "<option value=\"{$key}\" " . self::is_selected($key, $args['selected']) . ">{$value}</option>";
            }
            $fields .= "</select>";
            return $fields;
        }

        static function submit($args) {
            $args_b = null;
            foreach ($args as $key => $value) {
                if (is_array($value)) {
                    $value = implode(" ", $value);
                }
                $args_b .= "{$key}=\"{$value}\" ";
            }
            return $field = "<input type=\"submit\" {$args_b}>";
        }

        static function separator($args) {
            $args_b = null;
            foreach ($args as $key => $value) {
                if (is_array($value)) {
                    $value = implode(" ", $value);
                }
                $args_b .= "{$key}=\"{$value}\" ";
            }
            return $field = "<hr {$args_b} />";
        }

        protected function is_selected($current, $selected, $type = "select") {
            $s = null;
            if ($current == $selected && $type == 'select')
                $s = "selected=\"selected\" ";
            if ($current == $selected && $type == 'check')
                $s = "checked=\"checked\" ";
            return $s;
        }

    }

}
