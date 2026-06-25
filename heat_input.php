<form action="heat_write.php" method="post">
    <h1>熱中症対策アンケート</h1>

    <h2>作業場所</h2>
    <label><input type="radio" name="place" value="屋内" required> 屋内</label><br>
    <label><input type="radio" name="place" value="屋外"> 屋外</label><br><br>

    <h2>現場に常備して欲しい熱中症対策グッズ</h2>
    <label><input type="radio" name="item" value="冷感タオル" required> 冷感タオル</label><br>
    <label><input type="radio" name="item" value="塩分タブレット"> 塩分タブレット</label><br>
    <label><input type="radio" name="item" value="スポーツドリンク"> スポーツドリンク</label><br>
    <label><input type="radio" name="item" value="経口補水液"> 経口補水液</label><br>
    <label><input type="radio" name="item" value="冷却スプレー"> 冷却スプレー</label><br>
    <label><input type="radio" name="item" value="アイススラリー"> アイススラリー</label><br><br>

    <h2>ご意見・理由 （任意）</h2>
    <textarea name="comment"></textarea><br><br>

    <input type="submit" value="投票する">
</form>

<p><a href="index.php">トップへ戻る</a></p>