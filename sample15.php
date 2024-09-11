<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>WEB開発回目</title>
</head>
<body>
    <div>
        <?php
            // DB接続
            try {
                $pdo = new PDO('mysql:dbname=mydb;host=localhost;port=8889;charset=utf8', 'root', 'root');
            } catch (PDOException $e) {
                echo 'DB接続エラー: ' . $e->getMessage();
                exit; 
            }

            // データを更新
            try {
                $result = $pdo->exec('UPDATE items SET id=1000, name="編集したデータ" WHERE id=2');
                echo 'データを更新しました。<br>';

                // 更新後のデータを取得して表示
                $records = $pdo->query('SELECT * FROM items WHERE id=1000');
                foreach ($records as $record) {
                    echo "id:{$record['id']} name:{$record['name']}" . '<br>';
                }
            } catch (PDOException $e) {
                echo 'クエリエラー: ' . $e->getMessage();
            }

            // mydbの中身を表示
            try {
                $records = $pdo->query('SELECT * FROM items');
                foreach ($records as $record) {
                    echo "id:{$record['id']} name:{$record['name']}" . '<br>';
                }
            } catch (PDOException $e) {
                echo 'エラー: ' . $e->getMessage();
            }
        ?>
    </div>
</body>
</html>
