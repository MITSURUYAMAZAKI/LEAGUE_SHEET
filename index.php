<?php 

    $teams = ["岩藤","GB","SH","チャオズ"];




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
    <div class="box"></div>
    <div class="box"><?= $teams[0]?></div>
    <div class="box"><?= $teams[1]?></div>
    <div class="box"><?= $teams[2]?></div>
    <div class="box"><?= $teams[3]?></div>
  </div>
  <div class="row">
    <div class="box"><?= $teams[0]?></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
  </div>
  <div class="row">
    <div class="box"><?= $teams[1]?></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
  </div>
  <div class="row">
    <div class="box"><?= $teams[2]?></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
  </div>
  <div class="row">
    <div class="box"><?= $teams[3]?></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
  </div>
</body>
</html>