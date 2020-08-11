<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find Max</title>
</head>
<body>
<form method="POST">
    <input type="text" name="count" placeholder="Input matrix count">
    <input type="submit" value="Creat Matrix">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == POST) {
    $arr = [];
    $count = $_POST['count'];
    for ($i = 0; $i < $count; $i++) {
        $arr[$i] = [];
        for ($j = 0; $j < $count; $j++) {
            $numberMatrix = rand(0, 100);
            array_push($arr[$i], $numberMatrix);
        }
    }

    $max = $arr[0][0];
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($arr[$i][$j] > $max) {
                $max = $arr[$i][$j];
            }
        }
    }
    echo 'So lon nhat la: ' .$max;
}
?>
</body>
</html>