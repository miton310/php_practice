<?php
require_once 'DbManager.php';

try {
  $db = getDb();
  $db->exec("MECHA KUCHA"); //　不正なクエリ
} catch (PDOException $e) {
  print "エラーコード：{$e->getCode()}<br />";
  print "エラーメッセージ：{$e->getMessage()}<br />";
} finally {
  $db = null;
}
