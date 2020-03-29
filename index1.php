<?php
    $link = mysqli_connect("localhost","root","root","memberapp");
        //サーバー名、ユーザ名、パスワード、データベース名

    if(mysqli_connect_error()){
        die( "データベースへのアクセスに失敗しました");
    }

    $query = "SELECT * FROM users WHERE email LIKE '%gmail.com'";

    if($result = mysqli_query($link,$query)){
        echo "クエリの発行に成功しました";
    }
    while($row = mysqli_fetch_array($result)){
        print_r($row);
    }
//ここまでLec125 where clause と while による複数データの取り出し
 /*
    echo "<p>あなたのメールアドレスは ".$row['email'].", パスワードは".$row['password']." です.</p>";
*/


?>