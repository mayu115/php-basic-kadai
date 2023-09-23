<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>kadai_005</title>
</head>

<body>
  <?php
    $scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];
    $average = array_sum($scores) / count($scores);
    echo $average;
  ?>
</body>

</html>