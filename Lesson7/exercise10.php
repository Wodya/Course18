<?php

function arrivalTime(int $hours, int $minutes, int $hoursOnRoad, int $minutesInRoad) : String{
  $resultMinute = ($minutes + $minutesInRoad) % 60;
  $totalHour = $hours + $hoursOnRoad + ($minutes + $minutesInRoad) / 60;
  $resultHour = $totalHour%24;
  $day = $totalHour > 23 ? "Завтра" : "Сегодня";
  return "Сейчас {$hours}:{$minutes}. Время прибытия {$day}: {$resultHour}:{$resultMinute}" . PHP_EOL;
}

echo arrivalTime(13,20,1,30);
echo arrivalTime(19,50,5,10);