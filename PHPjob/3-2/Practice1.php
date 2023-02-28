<?php

//りんご、みかん、桃のフルーツの単価と個数をもとに料金を計算します

//step1:フルーツと単価の連想配列を作成してください。
//配列の0:リンゴ、1:みかん、2:桃の順に個数を配列で作成してください。
$FruitsCost = ["りんご" => 100 , "みかん" => 75 , "もも" => 300];
$FruitsQuantity = [3,2,10];
//単価、個数再設定しました。

//step2:単価を計算する関数を定義してください。
//引数はフルーツの単価・個数の２つ、返り値は計算した合計値を返します。
function getPrice($cost, $quantity){
    $price = $cost * $quantity;
    return $price;
}

//step3:繰り返しを使ってそれぞれのフルーツを書き出してください。
$i = 0;
foreach($FruitsCost as $key => $value){
    echo $key."は".getPrice($value,$FruitsQuantity[$i])."円です。";
    echo'<br>';
    $i++;
}

?>