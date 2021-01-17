<?php
// DB Connect
try {
    $dsn = "mysql:dbname=oneline_bbs;host=mysql;charset=utf8";
    $user = 'root';
    $password = 'root';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('データベースに接続できません: ' . $e);
}

$errors = array();

// If POST, save procces
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = null;
    // name check
    if (!isset($_POST['name']) || !strlen($_POST['name'])) {
        $errors['name'] = '名前を入力してください';
    } else if (strlen($_POST['name']) > 40) {
        $errors['name'] = '名前は40文字以内で入力してください';
    } else {
        $name = $_POST['name'];
    }

    // comment check
    $comment = null;
    if (!isset($_POST['comment']) || !strlen($_POST['comment'])) {
        $errors['comment'] = 'ひとことを入力してください';
    } else if (strlen($_POST['comment']) > 200) {
        $errors['comment'] = 'ひとことは200文字以内で入力してください';
    } else {
        $comment = $_POST['comment'];
    }

    // db insert process
    if (count($errors) === 0) {
        try {
            $sql = "INSERT INTO post(name, commnet, created_at) VALUES (?, ?, ?)";
            $stmt = $dbh->prepare($sql);
            $data[] = $name;
            $data[] = $comment;
            $data[] = date('Y-m-d H:i:s');
            $stmt->execute($data);

            $dbh = null;
        } catch (Exception $e) {
            die('データを保存できませんでした: ' . $e);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>一言掲示板</title>
</head>
<body>
    <h1>ひとこと掲示板</h1>

    <form action="index.php" method="post">
        <?php if (count($errors)): ?>
        <ul class="error_list">
            <?php foreach ($errors as $error): ?>
            <li>
                <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        名前： <input type="text" name="name"><br>
        ひとこと： <input type="text" name="commnet" size="60"><br>
        <input type="submit" name="submit" value="送信">
    </form>
</body>
</html>