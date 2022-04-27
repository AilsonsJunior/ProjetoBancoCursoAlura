<?php

namespace Projetobanco\Modelo\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa()
    {
        return 0.05;
    }

    public function transfere($valorATransferir, Conta $contaDestino)
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }
}