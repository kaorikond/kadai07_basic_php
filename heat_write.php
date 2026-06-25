<?php
$place = $_POST["place"];
$item = $_POST["item"];
$comment = $_POST["comment"];

$time = date("Y-m-d H:i:s");

$data = $time . "," . $place . "," . $item . "," . $comment . PHP_EOL;

$result = file_put_contents("data/heat.txt", $data, FILE_APPEND);

var_dump($result);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>保存完了</title>
</head>
<body>
    <h1>保存しました</h1>

    <p><a href="heat_input.php">戻る</a></p>
    <p><a href="index.php">トップへ戻る</a></p>
</body>
</html>