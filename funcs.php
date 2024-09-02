<?php
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}

/**
 * MBTIのスコアを計算する関数
 *
 * @param array $responses 各質問の回答が含まれる連想配列
 * @return string MBTIタイプ
 */
function calculateMBTI($responses) {
    // 各指標のスコアを計算
    $E = $responses['q1'] + $responses['q3'] + $responses['q5'];
    $I = $responses['q2'] + $responses['q4'] + $responses['q6'] + $responses['q8'] + $responses['q10'];
    
    $S = $responses['q6'] + $responses['q8'] + $responses['q10'] + $responses['q12'] + $responses['q14'];
    $N = $responses['q7'] + $responses['q9'] + $responses['q11'] + $responses['q13'] + $responses['q15'];
    
    $T = $responses['q11'] + $responses['q13'] + $responses['q15'];
    $F = $responses['q12'] + $responses['q14'] + $responses['q16'] + $responses['q18'];
    
    $J = $responses['q16'] + $responses['q18'] + $responses['q20'];
    $P = $responses['q17'] + $responses['q19'];

    // MBTIタイプを決定
    $type = '';
    $type .= ($E >= $I) ? 'E' : 'I';
    $type .= ($S >= $N) ? 'S' : 'N';
    $type .= ($T >= $F) ? 'T' : 'F';
    $type .= ($J >= $P) ? 'J' : 'P';

    return $type;
}

?>