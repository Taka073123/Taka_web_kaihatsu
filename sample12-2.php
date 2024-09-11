<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>BMI</title>
</head>
<body>
    </form>
    <?php
    session_start();
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    echo "名前: " . $name . "<br>";
    echo "Email" . $email . "<br>";
    echo "セッションID: " . session_id() . "<br>";
    echo "セッション名: " . session_name() . "<br>";

    ?>
</body>
</html>