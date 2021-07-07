<?php

if(isset($_POST['submit']))
{
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
}

if(!$operation || (!$number1 && $number1 != '0') || (!$number2 && $number2 != '0')) 
{
    $error_result = 'Не все поля заполнены';
}

else 
{ 
    if(!is_numeric($number1) || !is_numeric($number2)) 
    {
        $error_result = 'Вы ввели не числовое значение';
    }
    else 
        switch($operation){ 
        case '+': 
            $result = $number1 + $number2; 
            break;
        case '-': 
            $result = $number1 - $number2;  
            break;
        case '*': 
            $result = $number1 * $number2;
            break;
        case '/':
            if( $number2 == '0')
            {
            	$error_result = 'На ноль делить нельзя!';
            } 
            else
                $result = $number1 / $number2;
                break;    
        }
}

if(isset($error_result)) 
{
    echo "Ошибка: $error_result";
}    
else 
{
    echo "Ответ: $result";
}

?>