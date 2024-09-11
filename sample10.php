<DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>WEB開発8回目</title>
</head>
<body>
    <form action="sample10.php" method="post">
        名前
        <input id="名前" type="text" name="名前">
        <input type="submit" value="送信">
    </form>
    <?php
        if(isset($_POST['名前'])){
            $value = htmlspecialchars($_POST['名前']);
            echo $value;
        }
    ?>
</body>
</html>