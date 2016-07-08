<?php

namespace Cursophp\Form {

    class FormFields {

        static function text($args) {
            foreach ($args as $key => $value) {
                if ($key != 'label') {
                    if (is_array($value)) {
                        $value = self::parseArray($value);
                    }
                    $args .= "{$key}=\"{$value}\" ";
                } else {
                    $label = $value;
                }
            }

            $field = "{$label}: <input type=\"text\" {$args} />";
            return $field;
        }

        static function parseArray($array) {
            $classes = null;
            for ($i = 0; $i < count($array); ++$i) {
                $classes .= "{$array[$i]} ";
            }
            return $classes;
        }

    }

}
