<?php
abstract class Product{
  public function Operation(){
      echo 'Operation begin' . PHP_EOL;
      echo $this->getProductString() . PHP_EOL;
      echo 'Operation end' . PHP_EOL;
  }
  abstract protected function getProductString() : string;
}

class ProductA extends Product{
  protected function getProductString(): string
  {
    return "Product A";
  }
}

class ProductB extends Product{
  protected function getProductString(): string
  {
    return "Product B";
  }
}

(new ProductA())->Operation();
(new ProductB())->Operation();



