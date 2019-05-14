<?php
    include_once 'database.inc.php';

/*
 *
 * Not Tested but it werks probably
 */

//get 

function get_media_prevlidge($id)
{
    return getMediaIdTable('prevlidge',$id);
}
function get_media_type($id)
{
    return getMediaIdTable('prevlidge',$id);
}
function get_media_Dateuploaded ($id)
{
    return getMediaIdTable('DateUploaded',$id);
}
function get_media_Aurthor ($id)
{
    return getMediaIdTable('Aurthor',$id);
}
function get_media_link ($id)
{
    return getMediaIdTable('Link',$id);
}

//set
function create_media($Type, $Aurthor, $Link, $prevlidge)
{
    
    SQLQuery("INSERT INTO ".$GLOBALS['table_name_media']." (_Type, Aurthor, Link, prevlidge) values (?, ?, ?, ?) ",[$Type, $Aurthor, $Link, $prevlidge],'');
}

function change_media_prevlidge($id, $newvalue)
{
    setMediaTable('prevlidge',$newValue,$id);
}
function change_media_type($id, $newvalue)
{
    setMediaTable('_Type',$newValue,$id);
}
function change_media_Dateuploaded ($id, $newvalue)
{
    setMediaTable('DateUploaded',$newValue,$id);
}
function change_media_Aurthor ($id, $newvalue)
{
    setMediaTable('Aurthor',$newValue,$id);
}
function change_media_link ($id, $newvalue)
{
    setMediaTable('Link',$newValue,$id);
}
function remove_media($id)
{
    SQLQuery("DELETE FROM ".$GLOBALS['table_name_media']." where id=?",[$id],'');
}