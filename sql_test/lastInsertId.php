<?php
require_once 'DbManager.php';

try {
  // データベースへの接続
  $db = getDb();
  // memberテーブルに対して新規にレコードを挿入
  $db->exec("INSERT INTO member (nam, sex, old, enter, memo) VALUES('田中', '女', 18, '2023-08-30', '')");

  // 直近のINSERT命令で取得したオートインクリメント値を取得
  print "直近のID値" . $db->lastInsertId();
} catch (PDOException $e) {
  die('エラーメッセージ：' . $e->getMessage());
};
