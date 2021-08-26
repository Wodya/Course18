<?php
interface IProductA{
  function getStringA() : string;
}
interface IProductB{
  function getStringB() : string;
}

interface IAbstractFactory{
    function getProductA() : IProductA;
    function getProductB() : IProductB;
}

class ProductA1 implements IProductA{
  function getStringA(): string
  {
    return "ProductA1";
  }
}

class ProductA2 implements IProductA{
  function getStringA(): string
  {
    return "ProductA2";
  }
}

class ProductB1 implements IProductB{
  function getStringB(): string
  {
    return "ProductB1";
  }
}

class ProductB2 implements IProductB{
  function getStringB(): string
  {
    return "ProductB2";
  }
}

class Factory1 implements IAbstractFactory {
  function getProductA(): IProductA
  {
    return new ProductA1();
  }
  function getProductB(): IProductB
  {
    return new ProductB1();
  }
}
class Factory2 implements IAbstractFactory {
  function getProductA(): IProductA
  {
    return new ProductA2();
  }
  function getProductB(): IProductB
  {
    return new ProductB2();
  }
}

function CreateProducts(IAbstractFactory $factory){
  echo $factory->getProductA()->getStringA() . " + " . $factory->getProductB()->getStringB() . PHP_EOL;
}

CreateProducts(new Factory1());
CreateProducts(new Factory2());