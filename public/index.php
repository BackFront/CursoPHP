<?php

require_once('../bootstrap.php');

use Cursophp\Form\Form;

$form = new Form('meu_formulario');
$form->setAction("localhost")->setMethod("post");
$form
        ->addField([
            "id" => "oi",
            "name" => "field_nome",
            "type" => "text",
            "placeholder" => "Digite seu nome",
            "label" => "Seu nome",
            //"value" => '',
            "class" => [
                "teste",
                "de",
                "class"
            ]
        ])
        ->addField([
            "id" => "idade",
            "type" => "text",
            "placeholde" => "digite sua idade",
            "label" => "Seu email",
            "value" => 1
        ])
        ->addField([
            "id" => "genero",
            "type" => "radio",
            "label" => "Genero: ",
            "check" => "none",
            "options" => [
                "masc" => "Masculino",
                "fem" => "Feminino",
                "none" => "Indefinido"
            ]
        ])
        ->addField([
            "id" => "estado",
            "type" => "select",
            "label" => "Estado: ",
            "selected" => "sao_paulo",
            "class" => [
                "select",
                "teste"
            ],
            "options" => [
                "maranhao" => "Maranhao",
                "rio_janeiro" => "Rio de Janeiro",
                "sao_paulo" => "Sao Paulo"
            ]
        ])
        ->addField([
            "id" => "confirm",
            "type" => "checkbox",
            "label" => "Confirma as informacoes citadas acima?",
            "class" => [
                "class",
                "css"
            ]
        ])
        ->addField([
            "id" => "line",
            "type" => "separator",
            "class" => [
                "separator",
                "horizontal"
            ]
        ])
        ->addField([
            "id" => "submit",
            "type" => "submit",
            "value" => "Enviad dados"
        ])->build();
