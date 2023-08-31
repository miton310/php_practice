<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="insert_process.php" method="POST">
    <div>
      <label for="isbn">ISBNコード：</label><br>
      <input type="text" name="isbn" size="25" maxlength="20" id="isbn">
    </div>
    <div>
      <label for="title">書名：</label><br>
      <input type="text" name="title" size="35" maxlength="150" id="title">
    </div>
    <div>
      <label for="price">価格：</label><br>
      <input type="text" name="price" size="6" maxlength="5" id="price">円
    </div>
    <div>
      <label for="publish">出版社：</label><br>
      <input type="text" name="publish" size="25" maxlength="30" id="publish">
    </div>
    <div>
      <label for="published">刊行日：</label><br>
      <input type="text" name="published" size="15" maxlength="10" id="published">
    </div>
    <div>
      <input type="submit" value="登録">
    </div>
  </form>
</body>

</html>