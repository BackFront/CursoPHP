<?php
$db_con = array();
$db_con["HOST"] = "localhost";
$db_con["USER"] = "root";
$db_con["PASS"] = "toor";
$db_con["DBSA"] = "curso_php";

require_once('../autoload.php');

use Cursophp\PessoaFisica;
use Cursophp\PessoaJuridica;
use Cursophp\Cliente;
use Cursophp\Fixture;

$Cpedro = new PessoaFisica("Pedro", "pedro@ig.com.br", "111.222.333-45", "R. Sabão de Pedra, 19", "3");
$pedro = new Cliente($Cpedro);

$Cthiago = new PessoaJuridica("Thiago", "thiago.jacinto@hotmail.com", "192790/0001-49", "R. Cantagalo, 900", "5");
$thiago = new Cliente($Cthiago);

$Crodolfo = new PessoaFisica("Rodolfo", "rodolfo.204@terra.com.br", "151.141.131,12", "R. Passaro Verde, 99", "2");
$rodolfo = new Cliente($Crodolfo);

$Craphaelo = new PessoaJuridica("Raphaelo", "raphaelo@esg.oto.org", "234890/0001-90", "Esgoto da cidade, 01", "4");
$raphaelo = new Cliente($Craphaelo);

$Castride = new PessoaFisica("Astride", "ast.ride@bol.com.br", "000.000.000-00", "R. Morro do Vidigal, 1001", "1");
$astride = new Cliente($Castride);

$clientes = [
    $pedro,
    $thiago,
    $rodolfo,
    $astride,
    $raphaelo,
];

$fixture = new Fixture($db_con['HOST'], $db_con['USER'], $db_con['PASS'], $db_con['DBSA']);

echo "<pre>";

foreach($clientes as $cliente) {
    $r = $fixture->persists($cliente)->flush();
    if($r){
        echo "Cliente [{$r}] - " . $cliente->getCliente()->getNome() . "Inserido com sucesso! <br>";
    } else {
        echo "Não foi possivel inserir o clente " . $cliente->getCliente->getNome() . " <br>";
    }
}
