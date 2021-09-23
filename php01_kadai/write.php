<?php
// ファイルに書き込み
$name = $_POST['name'];
$mail = $_POST['mail'];
$place = $_POST['place'];
$password = $_POST['password'];

//文字作成。改行して表示させるには"\n" を後ろにつける
$str = $name . '/' . $mail . '/' . $place .'/' . $password ."\n";

// ファイルをＯｐｅｎする(fileopen関数),書き込み(fwrite関数)､クローズ(fclose関数)
$file = fopen('data/data.txt', 'a'); 
fwrite($file, $str);
fclose($file);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>
    <h2>./data/data.txt を確認するとpostから送ったデータが保存されている</h2>

<table width="80%" border="1">
    <tr>
    <td>お名前</td>
    <td>Email</td>
    <td>出身地</td>
    <td>パスワード</td>
    </tr>

    <tr>
    <td> <?php echo $name ?> </td>
    <td> <?php echo $mail ?> </td>
    <td>：<?php echo $place ?></td>
    <td>：<?php echo $password ?></td>
    </tr>
</table>

    <ul>
        <li><a href="read.php">read.phpで確認する</a></li>
        <li><a href="post.php">Postに戻る</a></li>
    </ul>
</body>

</html>