
<?php

require_once('Remuneravel.php');

class FolhaDePagamento
{
    protected $salario;
    
    public function calcular(Remuneravel $funcionario)
    {
        $this->salario = $funcionario->remuneracao();
    }
}