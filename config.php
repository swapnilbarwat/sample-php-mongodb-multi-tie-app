<?php
define('URL', '');
define('UserAuth', 'clogeny');
define('PasswordAuth', 'clogeny');

$config = array(
	'username' => 'clogeny',
	'password' => 'clogeny',
	'dbname'   => 'blog',
	//'cn' 	   => sprintf('mongodb://%s:%d/%s', $hosts, $port,$database),
	//'connection_string'=> sprintf('mongodb://%s:%d/%s','50.203.224.3','27017','blog')
	'connection_string'=> sprintf('mongodb://clogeny@clogeny:50.203.224.6:27017,50.203.224.4:27017,50.203.224.9:27017/blog/?replicaSet=pertinoreplica')
);
