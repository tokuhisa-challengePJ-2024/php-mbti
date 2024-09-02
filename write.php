<?php
// funcs.phpをインクルード
include 'funcs.php';

// ファイルパスの設定
$file = 'data/data.txt';

// POSTリクエストが送信されているか確認
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 名前とメールアドレスを取得
    $name = isset($_POST['name']) ? $_POST['name'] : '未記入';
    $mail = isset($_POST['mail']) ? $_POST['mail'] : '未記入';

    // 質問の回答を取得
    $responses = [];
    for ($i = 1; $i <= 20; $i++) {
        // 各質問の値を取得し、デフォルト値を設定
        $responses["q$i"] = isset($_POST["q$i"]) ? $_POST["q$i"] : '未回答';
    }

    // MBTIタイプを計算
    $type = calculateMBTI($responses);

    // 書き込み用の文字列を生成
    $fileContent = date("Y-m-d H:i:s") . "," . $name . "," . $mail . "," . $type . ",";
    foreach ($responses as $response) {
        $fileContent .= $response . ",";
    }
    $fileContent = rtrim($fileContent, ",") . "\n"; // 末尾のカンマを削除して改行

    // データをファイルに書き込み
    file_put_contents($file, $fileContent, FILE_APPEND);

    echo "データが正常に保存されました。";
    // 結果を表示
    echo "<h1>MBTIタイプ: $type</h1>";
    
} else {
    echo "無効なリクエストです。";
}
?>

<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<!-- <h2>./data/data.txt を確認しましょう！</h2> -->

<ul>
<li><a href="post.php">戻る</a></li>
<li><a href="read.php">MBTIタイプのグラフを表示する</a></li> 
</ul>
</body>
</html>
