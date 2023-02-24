<?php

//りんご、みかん、桃のフルーツの単価と個数をもとに料金を計算します
$sum = 0;

//step1:フルーツと単価の連想配列を作成してください。
//配列の0:リンゴ、1:みかん、2:桃の順に個数を配列で作成してください。
$FruitsCost = ["りんご" => 300 , "みかん" => 150 , "もも" => 3000];
$FruitsQuantity = ["りんご" => 4 , "みかん" => 8 , "もも" => 1];

//step2:単価を計算する関数を定義してください。
//引数はフルーツの単価・個数の２つ、返り値は計算した合計値を返します。
function getPrice($cost, $quantity){
    return $cost * $quantity;
}

//step3:繰り返しを使ってそれぞれのフルーツを書き出してください。
foreach($FruitsCost as $key => $value){
    $price = getPrice($FruitsCost[$key] ,$FruitsQuantity[$key]);
    $sum += $price;
    echo "$key の価格は $price 円です。";
    echo '<br>';
}

echo "合計金額は$sum 円です";

?>