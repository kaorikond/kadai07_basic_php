<?php
$data = file("data/heat.txt");

$votes = [];

foreach ($data as $line) {
    $items = explode(",", trim($line));
    $item = $items[2];

    if (isset($votes[$item])) {
        $votes[$item]++;
    } else {
        $votes[$item] = 1;
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>投票結果</title>
</head>
<body>
    <h1>投票結果</h1>

    <?php foreach ($votes as $item => $count): ?>
        <p><?= $item ?>：<?= $count ?>票</p>
    <?php endforeach; ?>

    <p><a href="index.php">トップへ戻る</a></p>
</body>
</html>