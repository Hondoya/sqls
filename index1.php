<?php
    echo "Hello, world!";
 $link = mysqli_connect("localhost","root","root","memberapp");
        //サーバー名、ユーザ名、パスワード、データベース名

    if(mysqli_connect_error()){
        echo "データベースへのアクセスに失敗しました";
    } else {
        echo "アクセスは正常です";
    }

/*ここまで118*/
?>