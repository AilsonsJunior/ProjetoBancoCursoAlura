<?php

namespace Projetobanco\Modelo;

use Projetobanco\Modelo\Conta\NomeInvalidoException;

abstract class Pessoa
{
    use AcessoPropriedades;

    protected $nome;
    private $cpf;

    public function __construct($nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome()
    {
        return $this->nome;
    }

    public function recuperaCpf()
    {
        return $this->cpf->recuperaNumero();
    }

    final protected function validaNome($nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            throw new NomeInvalidoException ();
        }
    }
}
