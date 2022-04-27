<?php

namespace Projetobanco\Modelo\Conta;

use Projetobanco\Modelo\Conta\SaldoIndisponivelException;

abstract class Conta
{
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca($valorASacar)
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            throw new SaldoIndisponivelException($valorSaque, $this->saldo);
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita($valorADepositar)
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function recuperaSaldo()
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular()
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular()
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas()
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa();
}
