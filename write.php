<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write</title>
</head>
<body>
    <?php
        // XSS：クロスサイトスクリプティングの関数を追加
        function h($val){
            return htmlspecialchars($val, ENT_QUOTES);
        }
        $name=$_POST["name"];
        $birthplace=$_POST["birthplace"];
        $time=date("Y-m-d H:i:s");
        file_put_contents('data/data.txt', $time . $name . $birthplace, FILE_APPEND);
    ?>
    <p>提出しました</p>
    <p><?= h($name);  ?></p>
    <p><?= h($birthplace);  ?></p>
    <ul>
        <!-- hrefに結果を表示させるファイルに遷移する -->
        <li><a href="read.php">アンケート結果を確認する</a></li>
    </ul>    
</body>
</html>