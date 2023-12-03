<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <p>フォーム</p>
    <!-- formのメソッドのバリエーションって他に何があるんだろうか。 -->
    <!-- actionで送信先のファイルを指定。メソッドでpostかgetを指定 -->
    <form action="write.php" method="post">
        名前：<input type="text" name="name">
        出身地：<input type="text" name="birthplace">
        <input type="submit" value="送信">
    </form>    
</body>
</html>