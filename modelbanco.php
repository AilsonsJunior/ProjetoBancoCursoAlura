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

        use Projetobanco\modelo\Pessoa;
        use Projetobanco\modelo\conta\Conta;
        use Projetobanco\Modelo\Conta\ContaCorrente;
        use Projetobanco\modelo\conta\Titular;
        use Projetobanco\modelo\CPF;
        use Projetobanco\modelo\Endereco;
        use Projetobanco\modelo\Funcionario;


        echo "<br/>";
        echo "Numero de Contas: " .Conta::recuperaNumeroDeContas() ."<br/>"; //mostra o numero de contas criadas

        $endereco = new Endereco('Goiania', 'um bairro', 'minha rua', 'um numero');
        $eu = new Titular(new CPF('123.456.789-10'), 'Ailson Junior', $endereco);
        $primeiraConta = new ContaCorrente($eu);
        $primeiraConta->deposita(3200);

        echo "<br/>";
        echo "O nome do titular é: " .$primeiraConta->recuperaNomeTitular() ."<br/>";
        echo $eu->recuperaEndereco();
        echo "<br/>";
        echo "Seu saldo é de: " .$primeiraConta->recuperaSaldo() ."<br/>";

        /*$outroEndereco = new Endereco('A', 'b', 'c', '1D');
        $outrapessoa = new Titular(new CPF('698.549.548-10'), 'Ota Pessoa', $outroEndereco);
        $segundaConta = new ContaCorrente($outrapessoa);*/

        $contaRubens = new ContaCorrente( $rubens = new Titular( new CPF ('123.458.478-99'), 'Ryubens', $rubensEndereco = new Endereco('Goiania','NumSei', 'Rua', 'um numero ai')));
        $contaRubens->deposita(15000);

        echo "<br/>";
        echo "O nome do titular é: " . $contaRubens->recuperaNomeTitular() ."<br/>";
        echo $rubens->recuperaEndereco();          
        echo "<br/>";
        echo "Seu saldo é de: " .$contaRubens->recuperaSaldo() ."<br/>";
        //echo $outrapessoa->recuperaEndereco();

        echo "<br/>";
        echo "Numero de Contas: " .Conta::recuperaNumeroDeContas() ."<br/>";      
      ?>
    </pre>
</div>
</body>
</html>