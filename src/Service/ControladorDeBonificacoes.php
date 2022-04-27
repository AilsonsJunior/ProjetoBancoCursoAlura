<?php

namespace Projetobanco\Service;

use Projetobanco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal()
    {
        return $this->totalBonificacoes;
    }
}
