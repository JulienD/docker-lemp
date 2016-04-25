<?php

echo "<h1>" . TEST . "</h1>";

$db = mysqli_connect('localhost', 'root', 'password', 'mysql')
	or die('Error: ' . mysqli_error());

$query = 'SHOW DATABASES;';
$res = mysqli_query($db, $query);

if ($res) {
	echo '<pre>' . PHP_EOL;

	while ($row = mysqli_fetch_assoc($res)) {
		var_dump($row);
	}

	echo '</pre>' . PHP_EOL;
}

echo 'Success! ' . time();
