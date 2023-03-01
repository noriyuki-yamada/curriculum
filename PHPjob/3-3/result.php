<?php
//step2:結果を表すページを作成し、フォームから受け取った数字の羅列から1文字の数字を抜き出す。

//入力された数字を受け取る。
$number = $_GET['input'];

//数字の桁数を取得。
$length = strlen($number);

//数字の中からランダムな1文字の数字を抜き出す。
$random = mt_rand(0,$length-1);
$n = substr($number, $random, 1);

//step3:今日の日付と結果を表示する。

//数字によって運勢を決定する。
$fortune = "";
if($n == 0){
    $fortune = "凶";
}elseif($n >= 1 && $n <= 3){
    $fortune = "小吉";
}elseif($n >= 4 && $n <= 6){
    $fortune = "中吉";
}elseif($n >= 7 && $n <= 8){
    $fortune = "吉";
}elseif($n == 9){
    $fortune = "大吉";
}

//結果を表示する。
printf("%sの運勢は", date("Y/m/d", time()));
echo'<br>';
printf("選ばれた数字は%d", $n);
echo'<br>';
echo $fortune;

?>