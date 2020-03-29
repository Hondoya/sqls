<?php
    $link = mysqli_connect("localhost","root","root","memberapp");
        //サーバー名、ユーザ名、パスワード、データベース名

    if(mysqli_connect_error()){
        die( "データベースへのアクセスに失敗しました");
    }
    /*$query = "INSERT INTO `users` (`email`,`password`,`name`) VALUES ('kennethsjoe@gmail.com','chotcho','Kenneth Sjoebrom')";

    if($result = mysqli_query($link, $query)){
        echo "INSERTクエリは正しく発行されました。";   
    
    $query = "UPDATE `users` SET password = 'astra-modified' WHERE email = 'astra@mail.com' LIMIT 1";}
//ここまで123
    
    if($result = mysqli_query($link, $query)){
        echo "UPDATEクエリは正しく発行されました。"; 
        echo "<br>";
    }}*/

    $query = "SELECT * FROM users";
    //ノート参照

    if($result = mysqli_query($link,$query)){
        echo "クエリの取得に成功しました";
    }
    $row = mysqli_fetch_array($result);

    //print_r($row);

    echo "<p>あなたのメールアドレスは ".$row['email'].", パスワードは".$row['password']." です.</p>";



?>