<?php

namespace Projetobanco\Modelo\Funcionario;

use Projetobanco\Modelo\CPF;
use Projetobanco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    private $salario;

    public function __construct($nome, CPF $cpf, $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alteraNome( $nome)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recebeAumento($valorAumento)
    {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
    }

    public function recuperaSalario()
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao();
}
