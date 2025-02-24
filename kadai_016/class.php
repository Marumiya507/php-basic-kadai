<?php

//Foodクラス
class Food{
  //プロパティ
  Public $name;
  Public $price;

  //コンストラクタ
  Public function __construct(string $name,int $price){
    $this -> name = $name;
    $this -> price = $price;
  }
  
  //メソッド
  Public function show_price(){
    echo $this -> price.'<br>';
  }
}

//Animalクラス
class Animal{
  //プロパティ
  Public $name;
  Public $height;
  Public $weight;

  //コンストラクタ
  Public function __construct(String $name2,int $height2,int $weight2){
    $this -> name = $name2;
    $this -> height = $height2;
    $this -> weight = $weight2;
  }

  //メソッド
  Public function show_height(){
  echo $this -> height;
  }
}


$food = new Food('tomato',250);
print_r($food);
echo '<br>';


$animal = new Animal('dog',60,5000);
print_r($animal);
echo '<br>';

$food -> show_price();
$animal -> show_height();

?>