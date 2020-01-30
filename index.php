<?php

error_reporting(-1);
$firstNum=rand(1,6);
$secondNum=rand(1,6);
$thirdNum=rand(1,6);
$a=max($firstNum,$secondNum,$thirdNum);
echo "Кубик бросили первый раз, выпало:$firstNum<br/>";
echo "Кубик бросили второй раз, выпало:$secondNum<br/>";
echo "Кубик бросили третий раз, выпало:$thirdNum</br>";
echo "Самый удачный вариант:$a";
?>
