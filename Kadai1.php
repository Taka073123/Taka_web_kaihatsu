<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta name="kadai1" content="web開発4回目"/>
    <title>WEB開発課題</title>
</head>
<body>
    <table border="3">
        <tr>
            <th>商品</th>
            <th>価格</th>
        </tr>
        <tr>
            <td>りんご (2つ)</td>
            <td>100円</td>
        </tr>
        <tr>
            <td>お肉 (1個)</td>
            <td>1000円</td>
        </tr>
        <tr>
            <td>卵 (2個)</td>
            <td>200円</td>
        </tr>
    </table>
    
    <?php
    // 商品価格の計算
    $prices = array(100 * 2, 1000 * 1, 200 * 2); // りんご2個, お肉1個, 卵2個
    $total_price = array_sum($prices); // 税抜き合計金額の計算
    $tax_rate = 0.08; // 消費税率8%
    $total_taxed = $total_price * (1 + $tax_rate); // 税込み合計金額の計算

    // 結果の出力（日本円フォーマット）
    echo "<p>税抜き合計金額: ¥" . number_format($total_price) . "</p>";
    echo "<p>税込み合計金額: ¥" . number_format($total_taxed) . "</p>";
    ?>
</body>
</html>
