<?php 

use Illuminate\Database\Capsule\Manager;

$manager = new Manager;

$manager->addConnection([
	'driver' => 'pgsql',
	'host'	=>  'localhost',
	'username' => 'postgres',
	'password' => 'admin',
	'database' => 'biblioteca',
	'port'	=> '5432',
	'charset'	=> 'utf8',
	'prefix'	=> ''
]);

$manager->bootEloquent();