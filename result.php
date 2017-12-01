<?php
require_once __DIR__."/../key/DBaccess.php";

$input=$_POST['tea'];

echo $input;
$sql = "UPDATE memo SET text=:text WHERE id=1";
$stm = getDB()->prepare($sql);
$stm->bindValue(":text",$input);
$stm->execute();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="refresh" content="2 ;URL=http://hiraga.php.xdomain.jp/memo/index.php">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel ="stylesheet" href="style.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <title>Title</title>
</head>
<body>
<p>保存しました</p>
</body>
</html>
<script src="js.js"></script>