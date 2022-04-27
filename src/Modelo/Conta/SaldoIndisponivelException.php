<?php

namespace Projetobanco\Modelo\Conta;

use DomainException;

class SaldoIndisponivelException extends DomainException {
    
    public function __construct($valorSaque, $valorSaldo)
    {
        $mensagem = "Você tentou sacar $valorSaque, mas tem apenas $valorSaldo em conta.";
        parent::__construct($mensagem);
    }
}

?>