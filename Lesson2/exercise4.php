<?php
class ExampleMagic{
  public function __get($name)
  {
    echo "__get " . $name . PHP_EOL;
  }
  public function __set($name, $value)
  {
    echo "__set " . $name . PHP_EOL;
  }
  public function __isset($name)
  {
    echo "__isset " . $name . PHP_EOL;
  }
  public function __unset($name)
  {
    echo "__unset " . $name . PHP_EOL;
  }
  public function __call(string $name, array $arguments)
  {
    echo "__call " . $name . PHP_EOL;
  }
  static public function __callStatic(string $name, array $arguments)
  {
    echo "__callStatic " . $name . PHP_EOL;
  }
}

$example =  new ExampleMagic();
echo $example->varA;
$example->varB = 1;
echo isset($example->varC);
unset($example->varD);
echo $example->FuncA();
echo $example::FuncA();
