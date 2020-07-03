<?php

session_start();

$_SESSION['username'] ="robpercival";

echo "ようこそ、".$_SESSION['username']."さん";

if(array_key_exists('email',$_SESSION)){
    echo "ログインしています";
}
//Lesson 130, session variables quick test

?>