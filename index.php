<?php 

    $teams = ["岩藤","ジェントル","ヨゴーズ","チャオズ","ガナーズ","クサカク"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LEAGUE_SHEET</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <div class="row">
  <!-- ↓１行目作成 -->
      <div class="box">＊</div>
      <?php foreach($teams as $team):?>
      <div class="box"><?php echo $team;?></div>
      <?php endforeach ?>
  </div>
  <!-- ２行目以降作成 -->
  <?php foreach($teams as $team):?>
  <div class="row">
      <!-- １列目 -->
      <div class="box"><?= $team?></div>
      <!-- ２列目以降 -->
      <?php for ($i=0 ; $i< count($teams); $i++): ?>
        <div class="box"><?= $team."×".$teams[$i];?></div>
      <?php endfor ?>
  </div>
  <?php endforeach ?>
</body>
</html>