<?php
/**
 * [X] - Renderizar campos separadamente
 * [X] - Criar classe <i>Validator</i>
 * [X] - Criar classe <i>Request</i>
 * [X] - <i>Validator</i> extends de <i>Request</i>
 * [] - Criar 4 instancias de formulario e renderizar
 * 
 *  <h2>Restrições & dicas</h2>
 * - Toda a implementação deve ser feita usando OO (sem uso de funções)
 * - Não é permitido usar métodos e atributos estáticos
 * - Não é permitido usar os patterns Singleton e/ou Registry
 * - Procure fazer classes pequenas.
 * - Classes com +300 linhas não serão permitidas
 * - Procure fazer métodos pequenos. Métodos com +100 linhas não serão permitidos
 * - Use muitas interfaces para confiar na comuniçação/contrato dos seus objetos.
 * - Separe as classes em namespaces.
 */
require_once('../bootstrap.php');

use Cursophp\Form\Form;
use Cursophp\Form\Validator;

$form = new Form('meu_formulario', new Validator);
$form->setAction("/")->setMethod("post");
$form->addField([
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
        ])->build(); //build é referente a render. Apenas questões de nomeclatura


//Single Fields
$form->createField([
    "id" => "line",
    "type" => "separator",
    "class" => [
        "separator",
        "horizontal"
    ]
        ], true);

$form->createField([
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
        ], true);
