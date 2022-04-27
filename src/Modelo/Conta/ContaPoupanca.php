<?php

namespace Projetobanco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    protected function percentualTarifa()
    {
        return 0.03;
    }
}
