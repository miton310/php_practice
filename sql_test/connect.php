<?php
$dsn = 'mysql:dbname=mysql; host=mysql; charset=utf8';
$usr = 'root';
$passwd = 'password';

try {
  $db = new PDO($dsn, $usr, $passwd);
  print '接続に成功しました';
} catch (PDOException $e) {
  die("接続エラー:" . $e->getMessage());
} finally {
  $db = null;
}
