<link rel="stylesheet" href="css/question.css">

<?php

//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$Port = [80, 22, 20, 21];
$Web = ["PHP", "Python", "JAVA", "HTML"];
$MySQL = ["join", "select", "insert", "update"];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$CorrectPort = $Port[0];
$CorrectWeb = $Web[3];
$CorrectMySQL = $MySQL[1];

?>

<p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $my_name;?>さん</p>

<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="POST">

    <h2>①ネットワークのポート番号は何番？</h2>

    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <div class="radio">
        <?php foreach($Port as $value){ ?>
            <input type ="radio" name="AnswerPort" value="<?php echo $value; ?>">
            <?php echo $value;
        } ?>
    </div>

    <h2>②Webページを作成するための言語は？</h2>

    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <div class="radio">
        <?php foreach($Web as $value){ ?>
            <input type ="radio" name="AnswerWeb" value="<?php echo $value; ?>">
            <?php echo $value;
        } ?>
    </div>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>

    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <div class="radio">
        <?php foreach($MySQL as $value){ ?>
            <input type ="radio" name="AnswerMySQL" value="<?php echo $value; ?>">
            <?php echo $value;
        } ?>
    </div>

    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <input type="hidden" name="CorrectPort" value="<?php echo $CorrectPort; ?>" />
    <input type="hidden" name="CorrectWeb" value="<?php echo $CorrectWeb; ?>" />
    <input type="hidden" name="CorrectMySQL" value="<?php echo $CorrectMySQL; ?>" />
    <input type="hidden" name="my_name" value= "<?php echo $my_name; ?>" >

    <br>
    <div class="submit"><input type ="submit" value="回答する"></div>
</form>