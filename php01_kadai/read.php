<?php
// ファイルを開く。data.txtをテキストではなく、ブラウザ上で表示させる。
// 読み込みのみで、オープンするので 'r'にする
$openFile = fopen('data/data.txt', 'r');
// 書き込みは要らないので、fwrite関数は要らない

// ファイル内容を1行ずつ読み込んで出力。
while ($str = fgets($openFile)) {
    echo nl2br($str);
}

// ファイルを閉じる
fclose($openFile);

?>
