<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
</head>
<body>
    </form>
    <?php
        try{
            $pdo = new PDO('mysql:dbname=mydb;host=localhost;port=8890;cherset=utf8','root','root');  
            $stmt = $pdo ->query('SELECT * FROM item');
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($results as $row) {
                echo 'ID: ' . $row['id'] . ' 名前: ' . $row['name'] . '<br>';
            }

            
        }catch(PDOException $e){
            echo '接続失敗:'.$e->getMessage();
        }

    ?>
</body>
</html>