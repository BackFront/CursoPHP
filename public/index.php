<?php
//Configurações do banco de dados
define('HOST', "localhost");
define('USER', "root");
define('PASS', "toor");
define('DBSA', "curso_php");

require_once('../autoload.php');

use Cursophp\Fixture;

$fixture = new Fixture(HOST, USER, PASS, DBSA);
$clientes = $fixture->getAllClients();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="http://getbootstrap.com/favicon.ico">

        <title>Trilhando caminho com PHP | Orientação a Objetos</title>

        <!-- Bootstrap core CSS -->
        <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="http://getbootstrap.com/examples/starter-template/starter-template.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <?php
        foreach($clientes as $key) {
            $id = $key['id'];
            $nome = $key['nome'];
            $email = $key['email'];
            $endereco = $key['endereco'];
            $doc = $key['doc'];
            $grau = $key['importancia'];
            ?>

            <div class = "modal fade" id = "<?php echo $nome ?>" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel">
                <div class = "modal-dialog" role = "document">
                    <div class = "modal-content">
                        <div class = "modal-header">
                            <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;
                                </span></button>
                            <h4 class = "modal-title" id = "myModalLabel"><?php echo $nome ?></h4>
                        </div>
                        <div class = "modal-body">
                            <ol>
                                <li>Nome: <?php echo $nome ?></li>
                                <li>Email: <?php echo $email ?></li>
                                <li>Endereço: <?php echo $endereco ?></li>
                                <li>CPF/CNPJ: <?php echo $doc ?></li>
                                <li>Grau de Importancia: <?php echo $grau ?></li>
                            </ol>
                        </div>
                        <div class = "modal-footer">
                            <button type = "button" class = "btn btn-default" data-dismiss = "modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Trilhando caminho com PHP | Orientação a Objetos</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="fixture.php">Rodar Fixture(Gerar clientes)</a></li>
                        <!--                        <li><a href="#about">About</a></li>
                                                <li><a href="#contact">Contact</a></li>-->
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">

            <div class="starter-template">
                <h1>Trilhando caminho com PHP | Orientação a Objetos</h1>
                <p class="lead">Cadastro de Clientes</p>
            </div>

            <table class="table table-striped sortable">
                <thead>
                    <tr><th>Nome</th><th>Tipo de Cliente</th><th>Endereco</th><th>CPF/CNPJ</th><th>..</th></tr>
                </thead>
                <tbody>
                    <?php
                    foreach($clientes as $key) {
                        $id = $key["id"];
                        $nome = $key["nome"];
                        $endereco = $key["endereco"];
                        $doc = $key["doc"];
                        $tipo = $key["tipo"];
                        echo "<tr><td>${nome}</td><td>${tipo}</td><td>${endereco}</td><td>${doc}</td><td><button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#${nome}\">Visualizar</td></tr>";
                    }
                    ?>
                </tbody>
            </table>

        </div><!-- /.container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
        <script src="http://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>