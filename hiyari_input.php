<form action="hiyari_write.php" method="post">
    <h1>ヒヤリハット報告</h1>

    <h2>作業場所</h2>
    <input type="text" name="place" placeholder="例：3階 配管スペース" required><br><br>

    <h2>危険度</h2>
    <label><input type="radio" name="level" value="低" required> 低</label><br>
    <label><input type="radio" name="level" value="中"> 中</label><br>
    <label><input type="radio" name="level" value="高"> 高</label><br><br>

    <h2>ヒヤリハット内容</h2>
    <textarea name="content" required></textarea><br><br>

    <h2>改善案（任意）</h2>
    <textarea name="solution"></textarea><br><br>

    <input type="submit" value="報告する">
</form>

<p><a href="index.php">トップへ戻る</a></p>