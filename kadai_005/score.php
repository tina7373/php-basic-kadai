<!-- 生徒10人分の点数を入れる変数と値の定義 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題3~5章</title>
</head>
<body>
    <p>
        <?php
               $score1 = "80";
        $score2 = "60";
        $score3 = "55";
        $score4 = "40";
        $score5 = "100";
        $score6 = "25";
        $score7 = "80";
        $score8 = "95";
        $score9 = "30";
        $score10 = "60";
        $sam_score = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
        $avarage_score = $sam_score / 10;

        echo "合計点は{$sam_score}点です。";
        echo "<br>";
        echo "平均点は{$avarage_score}点です。";
        ?>
    </p>
</body>
</html> 

