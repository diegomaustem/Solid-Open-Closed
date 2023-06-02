<?php

include_once('ContratoClt.php');
include_once('ContratoPj.php');
include_once('FolhaDePagamento.php');

$funcionario = new ContratoClt();

$folhaPagamento = new FolhaDePagamento();

$folhaPagamento->calcular($funcionario);

print_r($folhaPagamento);





