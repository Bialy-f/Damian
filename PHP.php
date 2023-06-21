<?php
$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];
echo 'Wynik działania '.$liczba1.' '.$_POST['znak'].' '.$liczba2.' wynosi ';
switch($_POST['znak']) {
  case "+":
    echo $liczba1 + $liczba2; break;
  case "-":
    echo $liczba1 - $liczba2; break;
  case "*":
    echo $liczba1 * $liczba2; break;
  case "/":
    echo $liczba1 / $liczba2; break; }
?> 