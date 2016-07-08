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
            "value" => "teste"
        ])
        ->addField([
            "id" => "idade",
            "type" => "numeric",
            "placeholde" => "digite sua idade",
            "value" => 1
        ])->build();
