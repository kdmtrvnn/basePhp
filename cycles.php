<?php 

//1

$i = 0;

print_r('Делятся на 3 без остатка: <br>');

while($i >= 0 && $i <= 100)
{
	$i++;
	$i % 3 == 0 ? print_r($i . '<br>') : null;
}

//2

$number = 0;
do {
    if ($number == 0) {
        echo $number . ' – это ноль. <br>';
        $number++;
    } elseif ($number % 2 != 0) {
        echo $number . ' – нечетное число. <br>';
        $number++;
    } else {
        echo $number . ' – четное число. <br>';
        $number++;
    }
} while ($number < 11);


//3

  for($i = 0; $i < 10; print_r($i++ . '<br>'));

//4

  $arr = ['Московская область' => ['Москва', 'Зеленоград', 'Клин'], 'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт']];

  foreach($arr as $key => $value)
  {
  	echo $key . ': <br>';

  	foreach($value as $item)
  	{
  		echo $item . '<br>';
  	}
  }

 //5 
 
$mass = ['Московская область' => ['Москва', 'Зеленоград', 'Клин'], 'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт']];

  print_r('Города на букву К: <br>');

  foreach($mass as $key => $value)
  {

  	foreach($value as $item)
  	{
  		mb_substr($item, 0, 1) == 'К' ? print_r($item . '<br>') : null;
  	}
  }

 //6

function translit($text)
{
  $mass = array('а' => 'a',   'б' => 'b',   'в' => 'v',
                'г' => 'g',   'д' => 'd',   'е' => 'e',
                'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
                'и' => 'i',   'й' => 'y',   'к' => 'k',
                'л' => 'l',   'м' => 'm',   'н' => 'n',
                'о' => 'o',   'п' => 'p',   'р' => 'r',
                'с' => 's',   'т' => 't',   'у' => 'u',
                'ф' => 'f',   'х' => 'h',   'ц' => 'c',
                'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
                'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
                'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
                'А' => 'A',   'Б' => 'B',   'В' => 'V',
                'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
                'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
                'И' => 'I',   'Й' => 'Y',   'К' => 'K',
                'Л' => 'L',   'М' => 'M',   'Н' => 'N',
                'О' => 'O',   'П' => 'P',   'Р' => 'R',
                'С' => 'S',   'Т' => 'T',   'У' => 'U',
                'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
                'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
                'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
                'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya', 
                );

  $text_a = preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY);
    
  $text = '';

  foreach($text_a as $val) 
  {
    $text .= (isset($mass[$val])) ? $mass[$val] : $val; 
  }
      return $text;
}
      $text = 'Привет, учим пхп?)';
      echo transLit($text);

//7

function replace($string)
{
  $replace = preg_replace('/\s/', '_', $string); 
  echo '<br>' . $replace . '<br>';
}

replace('Пошли сегодня гулять )');


//8

function replaceTranslit($string)
{
  $translit = translit($string);
  echo replace($translit);
}

replaceTranslit('Пошли сегодня гулять )');

?>