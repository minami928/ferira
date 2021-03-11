<?php
    session_start();//セッションが始まる
    if (isset ($_POST["text1"])){
        $_SESSION["happy"]["text"]=$_POST["text1"];
        header("Location:money.html");
        exit();
    }
    if (isset ($_POST["money"])){
        $_SESSION["happy"]["money"]=$_POST["money"];
        header("Location:temple.html");
        exit();
    }
    if (isset ($_POST["temp"])){
        $_SESSION["happy"]["temp"]=$_POST["temp"];
        // header("Location:kakunin.php");
        // exit();
    }

    $instance=new mysqli("localhost","sminami","eccMyAdmin","sminami");

    if($instance->connect_error){
        exit("DB Connect Error");
    }

    if( $_SERVER["REQUEST_METHOD"] == "POST" ) {

        $text = $_SESSION["happy"]["text"];
        $money = $_SESSION["happy"]["money"];
        $template = $_SESSION["happy"]["temp"];

        $insertsql="insert into gulp_g_text(time,text, money, template) values(now(),'{$text}', {$money},{$template})";


        $result = $instance->query($insertsql);
        if( ! $result ) {
            print "SQL Query Error<br>{$insertsql}";
        }

        // complateに移動

        exit();

    }
    ?>



