<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
    // ソートする配列を宣言
    $nums = [15, 4, 18, 23, 10];

    function sort_2way($nums, $order) {
        if ($order === 'asc') {
            sort($nums); // 昇順ソート
            echo '昇順にソートします。<br>';
        } elseif ($order === 'desc') {
            rsort($nums); // 降順ソート
            echo '降順にソートします。<br>';
        } else {
            echo 'ソート順が正しくありません。<br>';
            return $nums;
        }

        // 結果を表示
        echo implode(', ', $nums) . '<br>';
        return $nums;
    }

    // 関数の呼び出し
    sort_2way($nums, 'asc');
    sort_2way($nums, 'desc');
    ?>

    </p>
</body>

</html>