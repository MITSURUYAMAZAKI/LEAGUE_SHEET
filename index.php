<?php 

    $teams = ["岩藤","ジェントル","ヨゴーズ","チャオズ","ザクレイ","ガナーズ","クサカク"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <div class="row"> 
      <div class="box">＊</div>
      <?php foreach($teams as $team):?>
      <div class="box"><?php echo $team;?></div>
      <?php endforeach ?>
  </div>
  <?php foreach($teams as $team):?>
  <div class="row">
      <div class="box"><?= $team?></div>
      <?php for ($i=0 ; $i< count($teams); $i++): ?>
      <div class="box"></div>
      <?php endfor ?>
  </div>
  <?php endforeach ?>
</body>
</html>