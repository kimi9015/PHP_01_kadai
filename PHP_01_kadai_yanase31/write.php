<?php
// ファイルに書き込み
$name = $_POST['name'];
$mail = $_POST['mail'];
$dantai = $_POST['dantai'];
$wrestler = $_POST['wrestler'];
$bestbout = $_POST['bestbout'];

//文字作成

// var_dump($name);

$str = $name . "," . $mail . "," . $dantai . "," . $wrestler . "," . $bestbout . "\n";

// var_dump($str);

$file = fopen('data/data.csv', 'a');
fwrite($file,$str);
fclose($file);

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>記録が完了しました！</h1>

    <ul>
        <li><a href="read.php">アンケート結果を確認する</a></li>
        <li><a href="post.php">再度入力する</a></li>
    </ul>
</body>

</html>