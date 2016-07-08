<?php

function custon_autoload($Class) {
    $dirName = __DIR__ . '/src';
    $dir = "{$dirName}/{$Class}.php";
    $dir = str_replace('\\', DIRECTORY_SEPARATOR, $dir);

    if (file_exists($dir)):
        require_once($dir);
    else:
        echo "{$dirName}/{$Class}.php <br>";
        die("Erro ao incluir a classe: #{$Class} - no diretorio: {$dirName}<hr />");
    endif;
}

spl_autoload_register("custon_autoload");
