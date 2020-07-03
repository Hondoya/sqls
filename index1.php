<?php
//Lec 133, cookie
setcookie("customerID","1234",time() + 60 * 60 * 24);

echo $_COOKIE["customerID"];

?>

<form method="post">
    <input name="email" type="text" placeholder="Email">
    <input name="password" type="password" placeholder="Password">
    <input type="submit" value="sign up">
    
</form>
    
    