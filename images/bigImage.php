<?php

$image = $_GET["bigImage"];

$link = mysqli_connect('127.0.0.1', 'root', '12345678', 'images');

$result = mysqli_query($link, "update images set count = count + 1 where id = '$image'");

$query = mysqli_query($link, "SELECT * FROM images where id = '$image'");

$image = mysqli_fetch_assoc($query);

$q = explode('.', $image['image']);

echo "<img src='http://localhost:8000/photos/big/{$image['id']}.{$q[1]}'>";

echo "Количество просмотров: {$image['count']}";

?> 