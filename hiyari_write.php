<?php
$place = $_POST["place"];
$level = $_POST["level"];
$content = $_POST["content"];
$solution = $_POST["solution"];

$time = date("Y-m-d H:i:s");

$data = $time . "," . $place . "," . $level . "," . $content . "," . $solution . PHP_EOL;

$result = file_put_contents("data/hiyari.txt", $data, FILE_APPEND);

var_dump($result);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>報告完了</title>
</head>
<body>
    <h1>報告しました</h1>

    <p><a href="hiyari_input.php">戻る</a></p>
    <p><a href="hiyari_read.php">報告一覧を見る</a></p>
    <p><a href="index.php">トップへ戻る</a></p>
</body>
</html>