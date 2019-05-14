<?php
    include_once 'database.inc.php';
/*
 *
 * Tested evey function here on 1-29-19
 *  All seem to works
 *  Aref Aref
 */

// All get functions tested it all works perfectly

function get_userid($username)
{
    return getAccountOtherTable('id', 'username', $username);
}

function get_user_name($id)
{
    return getAccountIdTable('name',$id);
}
function get_user_username($id)
{
    return getAccountIdTable('username',$id);
}
function get_user_email($id)
{
    return getAccountIdTable('email',$id);
}
function get_user_id_byEmail($id)
{
    return getAccountIdTable('email',$id);
}
function get_user_profileurl($id)
{
    return getAccountIdTable('profile_url',$id);
}
function get_user_login_date($id)
{
    return getAccountIdTable('lastlogindate',$id);
}
function get_user_ip_address($id)
{
    return getAccountIdTable('IPAddress',$id);
}
function get_user_prevlidge($id)
{
    return getAccountIdTable('prevlidge',$id);
}
function get_user_password($id)
{
    return getAccountIdTable('password_hash',$id);
}
function get_user_cookie($id)
{
    return getAccountIdTable('cookie',$id);
}
function get_cookie_id($cookie)
{
    return getAccountOtherTable('id', 'cookie', $cookie);
}
function get_email_id($email)
{
    return getAccountOtherTable('id', 'email', $email);
}
function get_user_activated($id)
{
    return getAccountIdTable('Activated',$id);
}

//set all tested
function create_user($username,$name,$email,$password_hash,$profile_url,$prevlidge,$cookie,$IPAddress,$Activated)
{
    $sqlStatement1 = "INSERT INTO ".$GLOBALS['table_name_account']."(username,name,email,password_hash,profile_url,prevlidge,cookie,IPAddress,Activated)";
    SQLQuery("$sqlStatement1 values ( ?, ?, ?, ?, ?, ?, ?, ?, ?) ",[$username,$name,$email,$password_hash,$profile_url,$prevlidge,$cookie,$IPAddress,$Activated],'');
}

function change_user_name($id, $newValue)
{
    SetAccountTable('name',$newValue,$id);
}
function change_user_username($id, $newValue)
{
    SetAccountTable('username',$newValue,$id);
}
function change_user_email($id, $newValue)
{
    SetAccountTable('email',$newValue,$id);
}
function change_user_profileurl($id, $newValue)
{
    SetAccountTable('profile_url',$newValue,$id);
}
function change_user_login_date($id, $newValue)
{
    SetAccountTable('lastlogindate',$newValue,$id);
}
function change_user_ip_address($id, $newValue)
{
    SetAccountTable('IPAddress',$newValue,$id);
}
function change_user_prevlidge($id, $newValue)
{
    SetAccountTable('prevlidge',$newValue,$id);
}
function change_user_password($id, $newValue)
{
    SetAccountTable('password_hash',$newValue,$id);
}
function change_user_cookie($id, $newValue)
{
    SetAccountTable('cookie',$newValue,$id);
}
function activate_user($id)
{
    SetAccountTable('Activated','1',$id);
}
function deactivate_user($id)
{
    SetAccountTable('Activated','0',$id);
}

function remove_user($id)
{
    SQLQuery("DELETE FROM ".$GLOBALS['table_name_account']." where id=?",[$id],'');
}
