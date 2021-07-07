<?php 

//1, 4

function func1($a, $b)
{
	if($a > 0 && $b > 0)
	{
		echo ($a + $b) . '<br>';
	}
	else
	{
		return null;
	}
}

func1(1,2);

function func2($a, $b)
{
	if($a < 0 && $b < 0)
	{
		echo ($a - $b) . '<br>';
	}
	else
	{
		return null;
	}
}

func2(3,4);

function func3($a, $b)
{
	if($a !== $b)
	{
		echo ($a * $b) . '<br>';
	}
	else
	{
		return null;
	}
}

func3(5, 6);

//2

function func($a, $b)
{
	$a > $b ? print_r($a) : print_r($b);
}

func(3, 5);

//3

$nums = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach($nums as $num)
{
  switch ($num) {
    case 0: 
        echo $nums[0] . '<br>';
        break;
    case 1: 
        echo $nums[1] . '<br>';
        break;
    case 2: 
        echo $nums[2] . '<br>';
        break;
    case 3: 
        echo $nums[3] . '<br>';
        break;
    case 4: 
        echo $nums[4] . '<br>';
        break;  
    case 5: 
        echo $nums[5] . '<br>';
    	break;
    case 6: 
        echo $nums[6] . '<br>';
        break;    
    case 7: 
        echo $nums[7] . '<br>';
        break; 
    case 8: 
        echo $nums[8] . '<br>';
        break; 
    case 9: 
        echo $nums[9] . '<br>';
        break;                 
    default: 
    	return null;
	}
}

//5

function mathOperation($arg1, $arg2, $operation)
{
	switch ($operation) {
    case '+': 
        func1($arg1, $arg2);
        break;
    case '-': 
        func2($arg1, $arg2);
        break;
    case '*': 
        func3($arg1, $arg2);
        break;   
    default: 
    	return null; 
    }    
}

mathOperation(4, 8, '*');

//6

function power($val, $pow)
{
	if($pow !== 0) {
        return $val * power($val, $pow - 1) . '<br>';
    } 

    return 1;
}

echo power(2, 2);

//7

function number1($num1, $num2)
{
	$min = min($num1, $num2);
	$max = max($num1, $num2);
	$q = $num1 * $num2;

	if(1000 > $q && $q > 100 )
	{
		echo ($max - $min) . '<br>';
	}elseif(1000 < $q && $q < 100 ){
		echo $q/$max . '<br>';
	}
	else
	{
		return null;
	}
}

number1(50, 3);

?>