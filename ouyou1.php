<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Web開発第5回</title>
</head>
<body>
    <div>
        <?php
            for ($i = 1; $i <= 365; $i++) {
                echo date("Y-m-d (D)", strtotime("+$i day")) . "<br>";
            }
        ?>
    </div>
</body>
</html>
