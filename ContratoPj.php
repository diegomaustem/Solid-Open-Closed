<?php 

require_once('Remuneravel.php');

class ContratoPj implements Remuneravel
{
    public function remuneracao()
    {
        return 'Calculo de salário PJ.';
    }
}