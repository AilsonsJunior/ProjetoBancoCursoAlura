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
<pre>
  
    <?php
  
      require_once 'src/autoload.php';
      use Projetobanco\Modelo\Conta\Conta;
      use Projetobanco\Modelo\Conta\Titular;
      use Projetobanco\Modelo\CPF;
      use Projetobanco\Modelo\Endereco;
      use Projetobanco\Modelo\Conta\ContaCorrente;
      use Projetobanco\Modelo\Conta\NomeInvalidoException;
      
      try {
      $umaconta = new ContaCorrente( $eu = new Titular( new CPF('123.456.789-10'), 'Ailson Junior', $meuendereço = new Endereco('Goiania', 'Um Bairro', 'Uma Rua', 'UmNumero') ) );
      } catch (NomeInvalidoException $erro) {
        echo $erro->getMessage();
      }

      $umaconta->deposita(2500);

      print_r($umaconta);


    ?>
</pre>
</div>
</body>
</html>