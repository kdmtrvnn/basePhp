<?php

$link = mysqli_connect('127.0.0.1', 'root', '12345678', 'images');

$query = mysqli_query($link, "SELECT * FROM images ORDER BY count desc");

$images = mysqli_fetch_all($query, MYSQLI_ASSOC);

	foreach ($images as $image)
	{
		$q = explode('.', $image['image']);

		echo "<a href='/bigImage.php?bigImage={$image['id']}'><img src='http://localhost:8000/photos/small/{$image['id']}.{$q[1]}'></a>";
	}
?> 