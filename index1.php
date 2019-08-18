<?php
    $link = mysqli_connect("localhost","root","root","memberapp");
        //サーバー名、ユーザ名、パスワード、データベース名

    if(mysqli_connect_error()){
        die( "データベースへのアクセスに失敗しました");
    }

    $query = "SELECT * FROM users";
    //ノート参照
/*ここまで118*/
?>