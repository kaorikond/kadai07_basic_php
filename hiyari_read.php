<?php
$data = file("data/hiyari.txt");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ヒヤリハット一覧</title>
</head>
<body>
    <h1>ヒヤリハット報告一覧</h1>

    <?php foreach ($data as $line): ?>
        <?php
        $items = explode(",", trim($line));
        ?>

        <hr>
        <p>日時：<?= $items[0] ?></p>
        <p>作業場所：<?= $items[1] ?></p>
        <p>危険度：<?= $items[2] ?></p>
        <p>内容：<?= $items[3] ?></p>
        <p>改善案：<?= $items[4] ?></p>
    <?php endforeach; ?>

    <p><a href="index.php">トップへ戻る</a></p>
</body>
</html>