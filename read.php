<?php
// ファイルを開く
$file = fopen('data/data.txt', 'r');

// MBTIタイプのカウント用配列を初期化
$mbti_counts = [
    'INTJ' => 0, 'INTP' => 0, 'ENTJ' => 0, 'ENTP' => 0,
    'INFJ' => 0, 'INFP' => 0, 'ENFJ' => 0, 'ENFP' => 0,
    'ISTJ' => 0, 'ISFJ' => 0, 'ESTJ' => 0, 'ESFJ' => 0,
    'ISTP' => 0, 'ISFP' => 0, 'ESTP' => 0, 'ESFP' => 0
];

// ファイル内容を1行ずつ読み込んでMBTIタイプをカウント
while ($str = fgets($file)) {
    // 行をカンマで分割してMBTIタイプを取得（4番目の要素がMBTIタイプと仮定）
    $data = explode(',', $str);
    $mbti = isset($data[3]) ? trim($data[3]) : null;

    // MBTIタイプが存在する場合はカウントを増やす
    if ($mbti && array_key_exists($mbti, $mbti_counts)) {
        $mbti_counts[$mbti]++;
    }
}

fclose($file); // ファイルを閉じる
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>MBTIタイプのカウント結果</title>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Google Chartsを読み込み
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    // PHPからJavaScriptへのデータ渡し
    var data = google.visualization.arrayToDataTable([
        ['MBTIタイプ', 'カウント', { role: 'style' }, { role: 'annotation' }],
        <?php
        // PHP配列からJavaScript用のデータを生成
        foreach ($mbti_counts as $type => $count) {
            echo "['$type', $count, 'color: #76A7FA', '$count'],";
        }
        ?>
    ]);

    var options = {
        title: 'MBTIタイプの総数',
        legend: { position: 'none' },
        hAxis: {
            title: 'MBTIタイプ',
        },
        vAxis: {
            title: 'カウント'
        },
        annotations: {
            alwaysOutside: true, // ラベルを棒の外側に表示
            textStyle: {
                fontSize: 12,
                color: '#000',
                auraColor: 'none'
            }
        }
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}
</script>
</head>
<body>

<h1>MBTIタイプのカウント結果</h1>
<div id="chart_div" style="width: 900px; height: 500px;"></div>

</body>
</html>
