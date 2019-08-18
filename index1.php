<?php
    $link = mysqli_connect("localhost","root","root","memberapp");
        //サーバー名、ユーザ名、パスワード、データベース名

    if(mysqli_connect_error()){
        die( "データベースへのアクセスに失敗しました");
    }

    $query = "SELECT * FROM users";
    //ノート参照
    if($result = mysqli_query($link, $query)){
        echo "クエリは正しく発行されました。";   
    }
    $row = mysqli_fetch_array($result);
    echo "<p>あなたのメールアドレスは".$row['email'].",パスワードは".$row['password']."です.</p>";
    //print_r($row);
    //print_rして配列表示した場合はソースから見るとより見やすい。
?>