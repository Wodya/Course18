<?php
  $stack = new SplStack();
  for($i=0;$i<5;$i++)
    $stack->push($i);

  while($stack->count() > 0)
    echo $stack->pop() . PHP_EOL;
echo PHP_EOL;

$queue = new SplQueue();
for($i=0;$i<5;$i++)
  $queue->enqueue($i);

while($queue->count() > 0)
  echo $queue->dequeue() . PHP_EOL;

echo PHP_EOL;

$pQueue = new SplPriorityQueue();
for($i=0;$i<5;$i++)
  $pQueue->insert($i, rand(0,10));

$pQueue->top();

while($pQueue->count() > 0)
  echo $pQueue->extract() . PHP_EOL;
