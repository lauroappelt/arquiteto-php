<?php
namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}