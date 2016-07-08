<?php

require_once('../bootstrap.php');

use Cursophp\Form\Form;

$form = new Form('meu_formulário');
$form->setAction("localhost")->setMethod("post");
$form
        ->addField([
            "id" => "some_text",
            "type" => "text",
            "placeholder" => "Digite seu texto aqui",
            "label" => "Descricao",
            "value" => "teste",
            "class" => [
                "teste",
                "teste2"
            ]
        ])
        ->addField([
            "id" => "idade",
            "type" => "numeric",
            "placeholde" => "digite sua idade",
            "value" => 1
        ])->build();
