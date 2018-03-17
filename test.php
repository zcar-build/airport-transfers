<?php
echo "yes";
	$link = mysql_connect('localhost', 'cl46-a-wordp-f2l', 'JjXw!x2mK');

	if (!$link) {

	die('Could not connect: ' . mysql_error());

	}

	echo 'Connected successfully';

	mysql_close($link);

	?>