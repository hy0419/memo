<?php
require_once __DIR__."/../key/DBaccess.php";
$sql = "SELECT* FROM memo WHERE id=1";
$stm = getDB()->prepare($sql);
$stm->execute();
$result = $stm->fetchAll(PDO::FETCH_ASSOC);
$text=null;
foreach ($result as $item){
    $text = $item['text'];
}

?>




<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel ="stylesheet" href="style.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <title>メモ帳</title>
</head>
<body>

<h1>メモ帳</h1>
<form method="post" action="result.php">
<div>
<button id="b" type="submit">保存</button>
</div>
<div>
    <textarea placeholder="" id="ta" name="tea"><?php echo $text; ?></textarea>
</div>
</form>
</body>
</html>
<script src="js.js"></script>
<script>
//    var text="<?php //echo $text; ?>//";
//    $("#ta").val(text);


</script>