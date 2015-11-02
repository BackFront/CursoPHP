<?php
function custon_autoload($Class) {
    $dirName = __DIR__.'/src';
    if (file_exists("{$dirName}/{$Class}.class.php")):
        require_once("{$dirName}/{$Class}.class.php");
    else:
        die("Erro ao incluir a classe: #{$Class} - no diretorio: {$dirName}<hr />");
    endif;
}
spl_autoload_register("custon_autoload");
