<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <link rel="shortcut icon" href="_css/img/LogoFav.ico" type="image/x-icon">
  <title>Curso de PHP</title>
</head>
<body>
<div>
    <?php
        require_once 'src/autoload.php';

        use Projetobanco\Service\ControladorDeBonificacoes;
        use Projetobanco\Modelo\CPF;
        use Projetobanco\Modelo\Funcionario\Diretor;
        use Projetobanco\Modelo\Funcionario\EditorVideo;
        use Projetobanco\Modelo\Funcionario\Gerente;
        use Projetobanco\Modelo\Funcionario\Desenvolvedor;
        
        $umFuncionario = new Desenvolvedor(
            'Pedro',
            new CPF('123.456.789-10'),
            500
        );
        
        $umFuncionario->sobeDeNivel();
        
        $umaFuncionaria = new Gerente(
            'Chrisnelo',
            new CPF('987.654.321-10'),
            5000
        );
        
        $umDiretor = new Diretor(
            'Barbara',
            new CPF('123.951.789-11'),
            10000
        );
        
        $umEditor = new EditorVideo(
            'Blastoise de Oculos',
            new CPF('456.987.231-11'),
            1500
        );
        
        $controlador = new ControladorDeBonificacoes();
        $controlador->adicionaBonificacaoDe($umFuncionario);
        $controlador->adicionaBonificacaoDe($umaFuncionaria);
        $controlador->adicionaBonificacaoDe($umDiretor);
        $controlador->adicionaBonificacaoDe($umEditor);
        
        echo "O valor total em bonificação que a empresa deve pagar é de: R$ " . number_format($controlador->recuperaTotal(), 2, $decimal_separator = ',', $thosands_separator = '.');
    ?>
</div>
</body>
</html>