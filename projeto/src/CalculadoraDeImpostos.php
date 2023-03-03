<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Impostos\Imposto;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orçamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orçamento);
    }
}