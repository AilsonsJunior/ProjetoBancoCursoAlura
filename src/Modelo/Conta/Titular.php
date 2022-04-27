<?php

namespace Projetobanco\Modelo\Conta;

use Projetobanco\Modelo\Autenticavel;
use Projetobanco\Modelo\Pessoa;
use Projetobanco\Modelo\CPF;
use Projetobanco\Modelo\Endereco;

class Titular extends Pessoa implements Autenticavel
{
    private $endereco;

    public function __construct(CPF $cpf,$nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco()
    {
        return $this->endereco;
    }

    public function podeAutenticar($senha)
    {
        return $senha === 'abcd';
    }
}
