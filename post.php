<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* シンプルなスタイルを追加 */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1, h2 {
            color: #333;
        }
        .question {
            margin-bottom: 15px;
        }
        .question p {
            margin: 0;
        }
    </style>
<title>MBTI診断フォーム</title>
</head>

<body>
	<h1>MBTI簡易診断</h1>
	<form action="write.php" method="post">
	<!--  名前とメールの入力 --> 
	<div class="question">
		<p>お名前:</p>
		<input type="text" name="name" required>
	</div>
	<div class="question">
		<p>EMAIL:</p>
		<input type="email" name="mail" required>
	</div>
	
	<h2>外向（E: Extraversion） vs. 内向（I: Introversion）</h2>
<div class="question">
    <p>新しい人と出会うことに興奮を感じますか？</p>
    <label><input type="radio" name="q1" value="2"> 非常に当てはまる</label>
    <label><input type="radio" name="q1" value="1"> まあ当てはまる</label>
    <label><input type="radio" name="q1" value="0"> どちらでもない</label>
    <label><input type="radio" name="q1" value="-1"> あまり当てはまらない</label>
    <label><input type="radio" name="q1" value="-2"> 全く当てはまらない</label>
</div>

<div class="question">
    <p>一人で静かな時間を過ごすのが好きですか？</p>
    <label><input type="radio" name="q2" value="-2"> 非常に当てはまる</label>
    <label><input type="radio" name="q2" value="-1"> まあ当てはまる</label>
    <label><input type="radio" name="q2" value="0"> どちらでもない</label>
    <label><input type="radio" name="q2" value="1"> あまり当てはまらない</label>
    <label><input type="radio" name="q2" value="2"> 全く当てはまらない</label>
</div>

<div class="question">
    <p>大人数でのイベントやパーティーが好きですか？</p>
    <label><input type="radio" name="q3" value="2"> 非常に当てはまる</label>
    <label><input type="radio" name="q3" value="1"> まあ当てはまる</label>
    <label><input type="radio" name="q3" value="0"> どちらでもない</label>
    <label><input type="radio" name="q3" value="-1"> あまり当てはまらない</label>
    <label><input type="radio" name="q3" value="-2"> 全く当てはまらない</label>
</div>

<div class="question">
    <p>一人で考え事をするのが好きですか？</p>
    <label><input type="radio" name="q4" value="-2"> 非常に当てはまる</label>
    <label><input type="radio" name="q4" value="-1"> まあ当てはまる</label>
    <label><input type="radio" name="q4" value="0"> どちらでもない</label>
    <label><input type="radio" name="q4" value="1"> あまり当てはまらない</label>
    <label><input type="radio" name="q4" value="2"> 全く当てはまらない</label>
</div>

<div class="question">
    <p>他人と意見を交換することでエネルギーを感じますか？</p>
    <label><input type="radio" name="q5" value="2"> 非常に当てはまる</label>
    <label><input type="radio" name="q5" value="1"> まあ当てはまる</label>
    <label><input type="radio" name="q5" value="0"> どちらでもない</label>
    <label><input type="radio" name="q5" value="-1"> あまり当てはまらない</label>
    <label><input type="radio" name="q5" value="-2"> 全く当てはまらない</label>
</div>

<h2>感覚（S: Sensing） vs. 直感（N: Intuition）</h2>
<div class="question">
    <p>物事を手順通りに進めるのが好きですか？</p>
    <label><input type="radio" name="q6" value="2"> 非常に当てはまる</label>
    <label><input type="radio" name="q6" value="1"> まあ当てはまる</label>
    <label><input type="radio" name="q6" value="0"> どちらでもない</label>
    <label><input type="radio" name="q6" value="-1"> あまり当てはまらない</label>
    <label><input type="radio" name="q6" value="-2"> 全く当てはまらない</label>
</div>

<div class="question">
    <p>将来の可能性について想像するのが好きですか？</p>
    <label><input type="radio" name="q7" value="-2"> 非常に当てはまる</label>
    <label><input type="radio" name="q7" value="-1"> まあ当てはまる</label>
    <label><input type="radio" name="q7" value="0"> どちらでもない</label>
    <label><input type="radio" name="q7" value="1"> あまり当てはまらない</label>
    <label><input type="radio" name="q7" value="2"> 全く当てはまらない</label>
</div>

<div class="question">
    <p>事実や具体的なデータに基づいて判断することが多いですか？</p>
    <label><input type="radio" name="q8" value="2"> 非常に当てはまる</label>
    <label><input type="radio" name="q8" value="1"> まあ当てはまる</label>
    <label><input type="radio" name="q8" value="0"> どちらでもない</label>
    <label><input type="radio" name="q8" value="-1"> あまり当てはまらない</label>
    <label><input type="radio" name="q8" value="-2"> 全く当てはまらない</label>
</div>

<div class="question">
    <p>直感的なひらめきを信じることが多いですか？</p>
    <label><input type="radio" name="q9" value="-2"> 非常に当てはまる</label>
    <label><input type="radio" name="q9" value="-1"> まあ当てはまる</label>
    <label><input type="radio" name="q9" value="0"> どちらでもない</label>
    <label><input type="radio" name="q9" value="1"> あまり当てはまらない</label>
    <label><input type="radio" name="q9" value="2"> 全く当てはまらない</label>
</div>

<div class="question">
    <p>現在の現実に焦点を当てて行動することが多いですか？</p>
    <label><input type="radio" name="q10" value="2"> 非常に当てはまる</label>
    <label><input type="radio" name="q10" value="1"> まあ当てはまる</label>
    <label><input type="radio" name="q10" value="0"> どちらでもない</label>
    <label><input type="radio" name="q10" value="-1"> あまり当てはまらない</label>
    <label><input type="radio" name="q10" value="-2"> 全く当てはまらない</label>
</div>

<h2>思考（T: Thinking） vs. 感情（F: Feeling）</h2>
<div class="question">
    <p>決断を下す際に、論理や客観的な理由を重視しますか？</p>
    <label><input type="radio" name="q11" value="2"> 非常に当てはまる</label>
    <label><input type="radio" name="q11" value="1"> まあ当てはまる</label>
    <label><input type="radio" name="q11" value="0"> どちらでもない</label>
    <label><input type="radio" name="q11" value="-1"> あまり当てはまらない</label>
    <label><input type="radio" name="q11" value="-2"> 全く当てはまらない</label>
</div>

<div class="question">
    <p>他人の感情を考慮して決断を下すことが多いですか？</p>
    <label><input type="radio" name="q12" value="-2"> 非常に当てはまる</label>
    <label><input type="radio" name="q12" value="-1"> まあ当てはまる</label>
    <label><input type="radio" name="q12" value="0"> どちらでもない</label>
    <label><input type="radio" name="q12" value="1"> あまり当てはまらない</label>
    <label><input type="radio" name="q12" value="2"> 全く当てはまらない</label>
</div>

<div class="question">
    <p>問題を解決する際に、最も効率的な方法を選びますか？</p>
    <label><input type="radio" name="q13" value="2"> 非常に当てはまる</label>
    <label><input type="radio" name="q13" value="1"> まあ当てはまる</label>
    <label><input type="radio" name="q13" value="0"> どちらでもない</label>
    <label><input type="radio" name="q13" value="-1"> あまり当てはまらない</label>
    <label><input type="radio" name="q13" value="-2"> 全く当てはまらない</label>
</div>

<div class="question">
    <p>自分の価値観に従って行動することが重要ですか？</p>
    <label><input type="radio" name="q14" value="-2"> 非常に当てはまる</label>
    <label><input type="radio" name="q14" value="-1"> まあ当てはまる</label>
    <label><input type="radio" name="q14" value="0"> どちらでもない</label>
    <label><input type="radio" name="q14" value="1"> あまり当てはまらない</label>
    <label><input type="radio" name="q14" value="2"> 全く当てはまらない</label>
</div>

<div class="question">
    <p>論理的に一貫した議論を好みますか？</p>
    <label><input type="radio" name="q15" value="2"> 非常に当てはまる</label>
    <label><input type="radio" name="q15" value="1"> まあ当てはまる</label>
    <label><input type="radio" name="q15" value="0"> どちらでもない</label>
    <label><input type="radio" name="q15" value="-1"> あまり当てはまらない</label>
    <label><input type="radio" name="q15" value="-2"> 全く当てはまらない</label>
</div>

<h2>判断（J: Judging） vs. 認知（P: Perceiving）</h2>
<div class="question">
    <p>計画を立ててから行動するのが好きですか？</p>
    <label><input type="radio" name="q16" value="2"> 非常に当てはまる</label>
    <label><input type="radio" name="q16" value="1"> まあ当てはまる</label>
    <label><input type="radio" name="q16" value="0"> どちらでもない</label>
    <label><input type="radio" name="q16" value="-1"> あまり当てはまらない</label>
    <label><input type="radio" name="q16" value="-2"> 全く当てはまらない</label>
</div>

<div class="question">
    <p>その場の状況に応じて行動することが多いですか？</p>
    <label><input type="radio" name="q17" value="-2"> 非常に当てはまる</label>
    <label><input type="radio" name="q17" value="-1"> まあ当てはまる</label>
    <label><input type="radio" name="q17" value="0"> どちらでもない</label>
    <label><input type="radio" name="q17" value="1"> あまり当てはまらない</label>
    <label><input type="radio" name="q17" value="2"> 全く当てはまらない</label>
</div>

<div class="question">
    <p>締め切りを守ることに強いプレッシャーを感じますか？</p>
    <label><input type="radio" name="q18" value="-2"> 非常に当てはまる</label>
    <label><input type="radio" name="q18" value="-1"> まあ当てはまる</label>
    <label><input type="radio" name="q18" value="0"> どちらでもない</label>
    <label><input type="radio" name="q18" value="1"> あまり当てはまらない</label>
    <label><input type="radio" name="q18" value="2"> 全く当てはまらない</label>
</div>

<div class="question">
    <p>柔軟に計画を変更することができる方が快適ですか？</p>
    <label><input type="radio" name="q19" value="2"> 非常に当てはまる</label>
    <label><input type="radio" name="q19" value="1"> まあ当てはまる</label>
    <label><input type="radio" name="q19" value="0"> どちらでもない</label>
    <label><input type="radio" name="q19" value="-1"> あまり当てはまらない</label>
    <label><input type="radio" name="q19" value="-2"> 全く当てはまらない</label>
</div>

<div class="question">
    <p>物事をきちんと整理整頓しておくのが好きですか？</p>
    <label><input type="radio" name="q20" value="2"> 非常に当てはまる</label>
    <label><input type="radio" name="q20" value="1"> まあ当てはまる</label>
    <label><input type="radio" name="q20" value="0"> どちらでもない</label>
    <label><input type="radio" name="q20" value="-1"> あまり当てはまらない</label>
    <label><input type="radio" name="q20" value="-2"> 全く当てはまらない</label>
</div>

    	<!-- <button type="button" onclick="calculateMBTI()">診断結果を見る</button> -->
		<input type="submit" value="送信">
	</form>

	<!-- <h2 id="result">診断結果: </h2> -->

<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>