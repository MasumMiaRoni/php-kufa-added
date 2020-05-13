<?php

define('Host', 'localhost');
define('User', 'root');
define('Password', '');
define('Database','iawd2004');

$db = mysqli_connect(Host,User,Password,Database);

if (!$db) {
	echo "No connected";
}

?>