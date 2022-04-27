<?php

namespace Projetobanco\Modelo\Funcionario;

use Projetobanco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao()
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar($senha)
    {
        return $senha === '1234';
    }
}