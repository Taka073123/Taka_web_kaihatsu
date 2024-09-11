<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>WEB開発8回目</title>
</head>
<body>
    <form action="" method="post">
        <label for="height">身長 (cm)</label>
        <input id="height" type="text" name="height" required>
        <label for="weight">体重 (kg)</label>
        <input id="weight" type="text" name="weight" required>
        <input type="submit" value="送信">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['height']) && !empty($_POST['weight'])) {
            // ユーザー入力をエスケープして、数値に変換
            $height = filter_var($_POST['height'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION) / 100;
            $weight = filter_var($_POST['weight'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

            if ($height > 0 && $weight > 0) {
                $good_weight = $height * $height * 22; // 理想の体重の計算
                echo '理想の体重: ' . round($good_weight, 2) . ' kg<br>'; // 小数点以下2桁まで表示

                // 現在の体重と理想の体重の比較
                if ($weight == round($good_weight, 2)) {
                    echo 'あなたの体重は適正体重です。';
                } else {
                    $difference = round($good_weight - $weight, 2);
                    if ($difference > 0) {
                        echo 'あと ' . $difference . ' キロで適正体重です。';
                    } else {
                        echo abs($difference) . ' キロ減量してください。';
                    }
                }
            } else {
                echo '正しい数値を入力してください。';
            }
        }
    ?>
</body>
</html>
