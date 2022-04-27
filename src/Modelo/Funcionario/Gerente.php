<?php

namespace Projetobanco\Modelo\Funcionario;

use Projetobanco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonificacao()
    {
        return $this->recuperaSalario();
    }

    public function podeAutenticar($senha)
    {
        return $senha === '4321';
    }
}
