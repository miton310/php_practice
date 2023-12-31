<?php
require_once "DbManager.php";
require_once 'Encode.php'; // e関数の有効化
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table class="table">
    <thead>
      <tr>
        <th>ISBNコード</th>
        <th>書名</th>
        <th>価格</th>
        <th>出版社</th>
        <th>刊行日</th>
      </tr>
    </thead>
    <tbody>
      <?php
      try {
        // データベースへの接続を確立
        $db = getDb();

        //　SELECT命令の実行
        $stt = $db->prepare('SELECT * FROM book ORDER BY published DESC');
        $stt->execute();
        // 結果セットの内容を順に出力
        while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
      ?>
          <tr>
            <td><?= e($row['isbn']) ?></td>
            <td><?= e($row['title']) ?></td>
            <td><?= e($row['price']) ?></td>
            <td><?= e($row['publish']) ?></td>
            <td><?= e($row['published']) ?></td>
          </tr>

      <?php
        }
      } catch (PDOException $e) {
        die('エラーメッセージ：' . $e->getMessage());
      };

      ?>

    </tbody>
  </table>
</body>

</html>