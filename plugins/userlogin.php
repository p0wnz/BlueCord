<?php

include_once "cookie.php";
include_once "../inc/blue.inc.php";

    function send_error_login_page($error)
    {
        $site = get_option_value('site','site-address');
        $login_page = get_option_value('site','site-login-page');
        header("Location: $site$login_page?error=$error");
    }
    $isLoggedIn = false;

    $cookie = get_cookie_browser();
    $userid = get_cookie_id($cookie);

    print_r($userid);
    print_r($userid[0]);

    if ($userid != Array() ) $isLoggedIn = true;
    if ($_POST == Array())
        send_error_login_page('try logging in again!');
    else if (isset($_POST['submit']) && $_POST['submit'] != "submit")
        send_error_login_page('try logging in again!');
    else if($_POST['login'] =="")
        send_error_login_page('You forgot to enter your email!');
    else if($_POST['pass'] =="" )
        send_error_login_page('You forgot to enter your password');
    else
    {
        $username = $_POST['login'];
        $password = hash('sha256',$_POST['pass']);
        $userid = get_userid($username);
        if ($userid == "") $userid = get_email_id($username);
        

        if ($userid == "") 
            send_error_login_page('Invaild username and password combination');
        $password_Hash = get_user_password($userid);
        if ( $password_Hash!= $password) 
            send_error_login_page('Invaild username and password combination');
            $hash = set_cookie_browser();
            change_user_cookie($userid, $hash);
        
        $isLoggedIn = TRUE;
    }
    
    //print_r($_POST);
    if ($isLoggedIn)
    {
        $site = get_option_value('site','site-address');
        header("Location: $site ");
        

    }
    else 
    {
        $site = get_option_value('site','site-address');
        $login_page = get_option_value('site','site-login-page');
        header("Location: $site$login_page");
    }


    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login</title>

</head>
<body>
    <form method=POST>
    username<input name=login><br>
    password<input name=pass type=password /><br>
    <input type=submit name=submit value=submit />
    </form>    
</body>
</html>