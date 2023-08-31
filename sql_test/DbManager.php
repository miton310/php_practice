<?php
function getDb(): PDO
{
  $dsn = "mysql:dbname=selfphp; host=mysql; charset=utf8";
  $user = 'root';
  $passwd = "password";

  // データベースへの接続を確立
  $db = new PDO($dsn, $user, $passwd);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $db;
}
