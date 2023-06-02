<?php

require_once('Remuneravel.php');

class ContratoClt implements Remuneravel
{
    public function remuneracao()
    {
        return 'Calculo de salário CLT.';
    }
}
