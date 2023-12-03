<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ</title>
</head>
<body>
    <?php
        $data=file_get_contents("data/data.txt");
        echo nl2br($data);
    ?>
    
</body>
</html>