<?php
//getData.phpの読み取り
require_once("getData.php");

//getDataをインスタンス化してデータ取得の関数をそれぞれ宣言
$getData = new getData();
$UserData = $getData -> getUserData();
$PostData = $getData -> getPostdata();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <img src="image/YIGroupLogo.png" class="pic">
        <div class="right">
<!---ユーザーデータから取得したデータを表示--->
            <div class="welcome">ようこそ <?php echo $UserData["last_name"], $UserData["first_name"] ?> さん</div>
            <div class="login_time">最終ログイン日: <?php echo $UserData["last_login"] ?></div>
        </div>
    </header>

    <table>
        <tr>
            <th>記事ID</th>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>本文</th>
            <th>投稿日</th>
        </tr>
<!---繰り返しを用いて記事データの表を作成--->
        <?php
        while ($row = $PostData->fetch(PDO::FETCH_ASSOC)) {?>
        <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["title"] ?></td>
<!---カテゴリNo.に応じてカテゴリ名を表示--->
            <td><?php if($row["category_no"] == 1){
                echo "食事";
            }elseif($row["category_no"] == 2){
                echo "旅行";
            }elseif($row["category_no"] == 3){
                echo "その他";
            }?></td>
            <td><?php echo $row["comment"] ?></td>
            <td><?php echo $row["created"] ?></td>
        </tr>
        <?php } ?>
    </table>

    <footer>Y&I group.inc</footer>
</body>
</html>