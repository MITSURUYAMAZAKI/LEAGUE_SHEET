<?php

// クラスの完成
class Human{
  // プロパティを定義
  private $name;

  // コンストラクタ（今回はいらないかも）
  // function __construct()
  // {
  //     $this->name ='ナナシさん';
  // }

  // （どっちかっていうと）ゲッターメソッド
  function greeting($aisatsu){
      echo $this->name .'からの'. $aisatsu;
  }

  // セッターメソッド
  function seteam($name){
    $this->name = $name;
  }

  // ゲッターメソッド
  function getName(){
    return $this->name;
  }

  }


