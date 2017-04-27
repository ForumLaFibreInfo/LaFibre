<?php



$mysqlinfos = array(
"HOST" => "localhost";
"USER" => "root";
"PASS" => "toor"
"NAME" = "lafibre"
);

try {
$MYSQL_session = new PDO('mysql:host='.$mysqlinfos['HOST'].';dbname='.$mysqlinfos['NAME'].'; charset=utf8', $mysqlinfos['USER'], $mysqlinfos['PASS'], array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
} catch (PDOException $e) {
exit;
}

