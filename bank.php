<?php
$before = 10000;
$percent = 0.1;
$age = 16;
for ($year = 1; $year <= 110; $year ++)
{
  $before = ($before * $percent) +  $before;
  $end = $age + $year;
  echo"{$year}-ый год в банке = {$before}<br>";  
if ($before > 1000000)
  {
  echo "Ему {$end} лет - ";
if ($end > 110)
{
  echo "он не дожил";
}
if ($end < 110)
{
  echo "он  дожил (скорее всего)";
}
   break;
  }
} 
?>