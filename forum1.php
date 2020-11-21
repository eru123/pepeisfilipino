<?php 

require_once __DIR__."/vendor/autoload.php";

$local = [
    "db_user" => "admin",
    "db_pass" => "admin",
    "db_host" => "localhost",
    "db_name" => "mydb",
    "db_pfix" => "forum_",
    "db_sfix" => "_server_1",
    "db_frce" => false
];

$webhost = [
    "db_user" => "id15385720_pepe",
    "db_pass" => '=C5A-nT/XBbN}]=c',
    "db_host" => "localhost",
    "db_name" => "id15385720_app",
    "db_pfix" => "forum_",
    "db_sfix" => "_server_1",
    "db_frce" => false
];

$app = new Pepe\Forum\App(@$_SERVER['HTTP_HOST'] != "https://pepeisfilipino.000webhostapp.com" ? $local : $webhost);

$app->listen();
$app->watcher();
$app->respond();