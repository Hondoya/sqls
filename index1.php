<?php

session_start();

echo $_SESSION['username'];

    $link = mysqli_connect("localhost","root","root","memberapp");
        //サーバー名、ユーザ名、パスワード、データベース名

    if(mysqli_connect_error()){
        die( "データベースへのアクセスに失敗しました");
    }



    if(array_key_exists('email',$_POST) OR array_key_exists('passwords',$_POST)){
        //print_r($_POST);
        if($_POST['email'] == ''){
            echo "メールアドレスを入力してください";
        } elseif($_POST['password'] == ''){
            echo "パスワードを入力してください";
        } else {
            $query = "SELECT `id` FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";
            $result = mysqli_query($link, $query);
            if (mysqli_num_rows($result) > 0){
                echo "そのアドレスは既に使用されています";
            } else {
                //未使用の場合,データをテーブルに挿入する処理を作る
                $query = "INSERT INTO `users` (`email`,`password`) VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$_POST['password'])."')"; 
                if(mysqli_query($link,$query)){
                    //echo "登録が完了しました";
                    
                    $_SESSION['email']=$_POST['email'];
                    header("Location: session.php");
                } else {
                    echo "登録に失敗しました. もう一度お試しください";
                }
            }
            
        }
     }
//progress -- Lesson 130, 3 Jul session variables MOD.

/*
    $reg_str = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";
    if(preg_match($reg_str, 'email')){
        echo "正しく入力されました"."\n";
    }else{
        echo "正しいメールアドレスを入力してください"."\n";
    }
*/
//メールアドレスが有効化どうかの検証。true判定がされないが、何が悪いのか全然わからん。あとで。
/*
ユーザー登録フォームを作成する。

1. Eメールとパスワードの入力フォーム、「登録する」ボタンを設置する
2. データが入力されているかどうかチェックする
3. メールアドレスが既出ではないかチェックする
4. 重複がなければデータを登録（ベースデータテーブルに追加する）を実行する
5. 登録に成功しましたというメッセージの表示

*/

?>


<form method="post">
    <input name="email" type="text" placeholder="Email">
    <input name="password" type="password" placeholder="Password">
    <input type="submit" value="sign up">
    
</form>
    
    