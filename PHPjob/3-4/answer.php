<link rel="stylesheet" href="css/answer.css">

<?php

//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
$CorrectPort = $_POST['CorrectPort'];
$CorrectWeb = $_POST['CorrectWeb'];
$CorrectMySQL = $_POST['CorrectMySQL'];
$AnswerPort = $_POST['AnswerPort'];
$AnswerWeb = $_POST['AnswerWeb'];
$AnswerMySQL = $_POST['AnswerMySQL'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function judge($answer, $correct){
    if($answer === $correct){
        echo "正解！";
    }elseif($answer !== $correct){
        echo "残念・・・";
    }
}

?>

<p1><!--POST通信で送られてきた名前を表示--><?php echo $my_name; ?>さんの結果は・・・？</p1>

<p2>①の答え</p2>
<!--作成した関数を呼び出して結果を表示-->
<p2> <?php judge($AnswerPort, $CorrectPort) ?> </p2>

<p2>②の答え</p2>
<!--作成した関数を呼び出して結果を表示-->
<p2> <?php judge($AnswerWeb, $CorrectWeb) ?> </p2>

<p2>③の答え</p2>
<!--作成した関数を呼び出して結果を表示-->
<p2> <?php judge($AnswerMySQL, $CorrectMySQL) ?> </p2>
