<?php

$instance=new mysqli("localhost","sminami","eccMyAdmin","sminami");

if($instance->connect_error){
    exit("DB Connect Error");
}


$sql="select * from gulp_g_text";
$result=$instance->query($sql);
// print_r($result);
$messege=[];
while($row=$result->fetch_assoc()){
 
    $messege[]=$row;
}

$instance->close();


function h($str)
{
    return htmlspecialchars($str,ENT_QUOTES,'UTF-8');

    
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/textsample.css">
    <link rel="stylesheet" href="css/ress.css">
    <title>幸せテキスト履歴</title>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/temptext.js"></script>
</head>
<body>
    <header>
        <div class="back"><a href="index.html"><img src="img/left.svg" alt="">
            <p>もどる</p></a>
        </div>

    </header>
    <div class="container">


        <!-- テキスト履歴の全体図 -->
        <div class="box">
            <div id="page">
                <div class="gulp">

                <?php foreach($messege as $m):?>
                    <!-- <?php print_r($m)?> -->
                    <div class="aa">
                        <div id="demo" class="main">
                            <a date-target="modal1" class="modal_open"><img src="img/pink.png" alt="紙"></a>
                        </div>
                        <div id="time"><?=$m["time"]?></div>
                    </div> 

                <?php endforeach ?>
                </div>
            </div>         
        </div>


        <!-- モーダルウインドウはここから -->
        <div class="modal_wrap">
            <div id="modal1" class="modal_box">

                <h2><div id="time"><?=$m["time"]?></div></h2><br>
                <!-- 時間 -->
                <!-- <p><div id="name"><//?=$m["name"]?></div></p> -->
                <!-- 誰からメッセきたか -->
                <div class="mail">
                    <div id="text"><?=h($m["text"])?></div><br>
                </div>
                <!-- テキスト 内容 -->

                <div class="close_top">
                    <div class="button_close"> 
                        <input type="submit" class="modal_close" value="一覧に戻る">
                    </div>
                </div>


            </div>

        </div>
    </div>


    <nav>
      <div class="nav__wrap">
        <div class="nav__wrap__box">
          <div class="nav__wrap__box__icon history">
            <p><a href="https://click.ecc.ac.jp/ecc/sminami/G/textsample.php"><img src="img/header-history-icon.svg" alt=""></a></p>
          </div>
          <div class="nav__wrap__box__text">
            <p><img src="img/header-history-text.svg" alt=""></p>
          </div>
        </div>
        <div class="nav__wrap__box">
          <div class="nav__wrap__box__icon gatya">
            <p><a href="gtya.html"><img src="img/header-gatya-icon.svg" alt=""></a></p>
          </div>
          <div class="nav__wrap__box__text">
            <p><img src="img/header-gatya-text.svg" alt=""></p>
          </div>
        </div>
        <div class="nav__wrap__box">
          <div class="nav__wrap__box__icon home">
            <p><a href="index.html"><img src="img/header-home-icon.svg" alt=""></a></p>
          </div>
          <div class="nav__wrap__box__text">
            <p><img src="img/header-home-text.svg" alt=""></p>
          </div>
        </div>
        <div class="nav__wrap__box">
          <div class="nav__wrap__box__icon dressup">
            <p><a href="#"><img src="img/header-dressup-icon.svg" alt=""></a></p>
          </div>
          <div class="nav__wrap__box__text">
            <p><img src="img/header-dressup-text.svg" alt=""></p>
          </div>
        </div>
        <div class="nav__wrap__box">
          <div class="nav__wrap__box__icon mypage">
            <p><a href="#"><img src="img/header-mypage-icon.svg" alt=""></a></p>
          </div>
          <div class="nav__wrap__box__text">
            <p><img src="img/header-mypage-text.svg" alt=""></p>
          </div>
        </div>
      </div>
    </nav>





</body>
</html>