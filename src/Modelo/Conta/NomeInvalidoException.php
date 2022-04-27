<?php

namespace Projetobanco\Modelo\Conta;

use DomainException;

class NomeInvalidoException extends DomainException {

    public function __construct() 
    {
        $message = "Nome informado precisa ter no minimo 5 caractéres";
        parent::__construct($message);
    }

}


?>