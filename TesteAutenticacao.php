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
        use Projetobanco\Modelo\CPF;
        use Projetobanco\Modelo\Funcionario\Gerente;
        use Projetobanco\Service\Autenticador;
        use Projetobanco\Modelo\Funcionario\Diretor;
        
        require_once 'src/autoload.php';
        
        $autenticador = new Autenticador();
        $umDiretor = new Diretor(
            'Ailson Junior',
            new CPF('123.456.789-10'),
            10000
        );
        
        $autenticador->tentaLogin($umDiretor, '1234');
    ?>
</div>
</body>
</html>