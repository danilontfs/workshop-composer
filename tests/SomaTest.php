<?php

use PHPUnit\Framework\TestCase;
use PHPConf\Soma;

class SomaTest extends TestCase{

  public function testSomaUmMaisUmRetornaDois(){
    $soma = new Soma();
    $this->assertEquals(2, $soma->calcula(1, 1));
  }

}
