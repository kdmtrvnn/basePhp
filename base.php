<?php

//1

const q = 13;
$hey = 'hey';
$int = 5;
$double = 36.6;
$number_8 = 0777;
$number_16 = 0x2D;

echo $hey . '<br>'; 
echo $int . '<br>'; 
echo $double . '<br>';
echo q . '<br>';

//2

$int = 5;
echo "$int" . '<br>'; 
echo '$int' . '<br>';

//3 

echo 010 .' ';
echo 011 .' ';
echo 012 .' ';
echo 013 .' ';
echo 014 .' ';
echo 015 .' ';
echo 016 .' ';
echo 017 .' ';
//echo 018;
//echo 019;
echo 020 .' ';
echo '<br>';

//4 

echo 0x0 .' ';
echo 0x1 .' ';
echo 0x2 .' ';
echo 0x3 .' ';
echo 0x4 .' ';
echo 0x5 .' ';
echo 0x6 .' ';
echo 0x7 .' ';
echo 0x8 .' ';
echo 0x9 .' ';
echo 0xA .' ';
echo 0xB .' ';
echo 0xC .' ';
echo 0xD .' ';
echo 0xE .' ';
echo 0xF .' ';

echo '<br>';

//5

$one = '”Я помню чудное мгновенье: <br>';
$two = 'Передо мной явилась ты, <br>';
$three = 'Как мимолетное виденье, <br>';
$four = 'Как гений чистой красоты.” <br>';
$author = '<i> А.С. Пушкин </i> <br>';


echo $one;
echo $two;
echo $three;
echo $four; 
echo $author;

//6


echo '”Я помню чудное мгновенье: <br>'; 
echo 'Передо мной явилась ты, <br>'; 
echo 'Как мимолетное виденье,<br>';
echo 'Как гений чистой красоты.”<br>';
echo '<i> А.С. Пушкин </i><br>';

//7

$int = 5;
$string = 'string';
$sum = $int + $string;

echo $sum; 
echo '<br>';

//8

echo(true xor true); //false 0
echo(false xor true); //true 1
echo(true xor false); //true 1
echo(false xor false); //false 0
echo($a xor $a); //false 0
echo($b xor $b); //false 0

?>
