<?php

namespace Estudo\Src\Model;

class Equacao{
  
  private string $equacao = "";
  private string $celsius = "Tc / 100";
  private string $fahrenheit = "Tf - 32 / 212";
  private string $kelvin = "Tk - 273 / 100";

  public function geradorDeEquacao(float $menorValor, float $maiorValor):void{
    $valorInferior = $maiorValor - $menorValor;
    
    $this->equacao = "Tx - {$menorValor} / {$valorInferior}";

    echo "Equação termométrica em celsius: ";
    echo "{$this->celsius} = {$this->equacao}" . PHP_EOL;
    
    echo "Equação termométrica em fahrenheit: ";
    echo "{$this->fahrenheit} = {$this->equacao}" . PHP_EOL;
    
    echo "Equação termométrica em kelvin: ";
    echo "{$this->kelvin} = {$this->equacao}" . PHP_EOL;
  }

  public function resolverEmCelsius(float $grauCelsius ,float $menorValor, float $maiorValor): void{
    $valorInferior = $maiorValor - $menorValor;
    $tc = $grauCelsius / 100.00;
    $tx = $tc * $valorInferior;
    $valorFinal = $tx + $menorValor;
    echo $valorFinal . "°";
  }

  public function resolverEmFahrenheit(float $graufah ,float $menorValor, float $maiorValor): void{
    $valorInferior = $maiorValor - $menorValor;
    $tf = ($graufah - 32) / 180;
    $tx = $tf * $valorInferior;
    $valorFinal = $tx + $menorValor;
    echo $valorFinal . "°";
  }

  


}