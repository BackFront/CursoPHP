<?php
(!isset($_SESSION)) ? session_start() : NULL;
/**
 * VALORES GLOBAIS DE URL/BASEPATCH
 */
@define(SUBDIR, '/'); //Usar caso o projeto nao esteja na pasta raiz do htdocs
@define(BASEPATCH, substr($_SERVER['SCRIPT_FILENAME'], 0, -strlen($_SERVER['SCRIPT_NAME'])) . SUBDIR);
@define(BASEURL, 'http://' . $_SERVER['SERVER_NAME'] . SUBDIR);
/**
 * VALORES CONFIGURACAO DO BANCO DE DADOS
 */
@define(DB_HOST, 'localhost');
@define(DB_USER, 'root');
@define(DB_PASS, '');
@define(DB_NAME, 'trilhando_caminho_php');
@define(DP_PORT, '');


require_once(BASEPATCH . "/autoload.php");
@$DB = new Cursophp\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$d = $_SERVER['SCRIPT_NAME'];
$count = strrpos($d, '/');
$url = 'http://' . $_SERVER['SERVER_NAME'] . substr($d, 0, $count);
