<?php

//Проверка типа файла

   $mime_types = [
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            ];

    if (!in_array($_FILES['picture']['type'], $mime_types))
    {
        echo 'Не соответствие типа файла';
        exit;
    }

//Загрузка и уменьшение размера картинки
   $tmp_name = $_FILES['picture']['tmp_name'];

   $name = $_FILES['picture']['name'];

   $link = mysqli_connect('127.0.0.1', 'root', '12345678', 'images');
   $typ = $_FILES['picture']['type'];
   $type = explode('/', $typ);
      
   $sql = "INSERT INTO images (image, type) VALUES ('$name', '$type[1]')";

   mysqli_query($link, $sql);

   if(mysqli_affected_rows($link) == 0)
   {
      mysqli_query($link, $sql);
   }

   $id = mysqli_insert_id($link);

   $q = explode('.', $name);

   $path = 'photos/big/' . $id . ".$q[1]";
   
   $upload = move_uploaded_file($tmp_name, $path);

   $upload ? print_r('файл успешно загружен') : print_r('произошла ошибка');
    
   list($width, $height) = getimagesize($path);

   $newwidth = 200;
   $newheight = 200;

   $thumb = imagecreatetruecolor($newwidth, $newheight);

if($_FILES['picture']['type'] == 'image/png')
{
   $source = imagecreatefrompng($path);

   imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

   imagepng($thumb, 'photos/small/' . $id . ".$q[1]");
}
elseif($_FILES['picture']['type'] == 'image/jpeg')
{
   $source = imagecreatefromjpeg($path);

   imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

   imagejpeg($thumb, 'photos/small/' . $id . ".$q[1]");
}

?> 