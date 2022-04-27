<?php

namespace Projetobanco\Service;

use Projetobanco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, $senha)
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "Ok. Usuário logado no sistema";
        } else {
            echo "Ops. Senha incorreta.";
        }
    }
}
