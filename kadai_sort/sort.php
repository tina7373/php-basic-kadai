<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        //ソート関数の定義
        function sort_2way(array $array, bool $order) : array{
             //引数$orderはTRUEか
        if($order){
            echo '昇順にソートします。';
            echo '<br>';
            sort($array);
        } else {
            echo '降順にソートします。';
            echo '<br>';
            rsort($array);
        }
        foreach ($array as $value) {
            echo $value;
            echo '<br>';
        }
        return $array;
    }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];
        sort_2way($nums, TRUE);
        echo '<br>';
        sort_2way($nums, FALSE);

       
        ?>
    </p>
</body>

</html>