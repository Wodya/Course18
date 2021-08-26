<?php
trait Singleton{
  private static $instance;
  public static function getInstance()
  {
    if (empty(self::$instance))
      self::$instance = new static();
    return self::$instance;
  }

  public int $count = 0;
  public function incCount(){
    $this->count++;
  }
  public function printCount(){
    echo $this->count;
  }
}

class ClassA
{
    use Singleton;
}

$a = ClassA::getInstance();
$a->incCount();
$b = ClassA::getInstance();

$a->printCount();
$b->printCount();
