<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
<p>
    <?php
    $nums = [15, 4, 18, 23, 10];

    function sort_2way($nums, $order) {
        if ($order === true) {
            sort($nums); // 昇順ソート
            echo '昇順にソートします。<br>';
        } elseif ($order === false) {
            rsort($nums); // 降順ソート
            echo '降順にソートします。<br>';
        } else {
            echo 'ソート順が正しくありません。<br>';
            return $nums;
        }

        foreach ($nums as $num) {
            echo $num . '<br>';
        }

        return $nums;
    }

    sort_2way($nums, true);
    sort_2way($nums, false);
    ?>
</p>

</body>

</html>