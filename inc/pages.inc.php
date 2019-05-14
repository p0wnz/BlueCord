<?php
    include_once 'database.inc.php';

//gets 
function get_page_title_by_id ($id)
{
    return getPageIdTable('Title',$id);
}
function get_page_id_by_Title ($title)
{
    return getPageOtherTable('id','title',$title);
}
function get_page_Content_URL ($id)
{
    return getPageIdTable('Content_URL',$id);
}
function get_page_Aurthor ($id)
{
    return getPageIdTable('Aurthor',$id);
}
function get_page_prevlidge($id)
{
    return getPageIdTable('prevlidge',$id);
}
function get_page_DateCreated($id)
{
    return getPageIdTable('DateCreated',$id);
}
function get_page_DateModified ($id)
{
    return getPageIdTable('DateModified',$id);
}

function get_page_Views($id)
{
    return getPageIdTable('Views',$id);
}
function get_page_Activated($id)
{
    return getPageIdTable('Activated',$id);
}
function get_page_ID_READ($id)
{
    return getPageIdTable('ID_READ',$id);
}
function get_page_ID_WRITE ($id)
{
    return getPageIdTable('ID_WRITE',$id);
}
function get_page_Keywords($id)
{
    return getPageIdTable('Keywords',$id);
}
function get_page_CommentID($id)
{
    return getPageIdTable('CommentID',$id);
}
function get_page_Likes($id)
{
    return getPageIdTable('Likes',$id);
}
function get_page_Dislikes($id)
{
    return getPageIdTable('Dislikes',$id);
}

function get_page_isOnRecm ($id)
{
    return getPageIdTable('isOnRecm',$id);
}
function get_page_isOnMenus($id)
{
    return getPageIdTable('isOnMenus',$id);
}
function get_page_link($id)
{
    return getPageIdTable('link',$id);
}
function get_page_Categories($id)
{
    return getPageIdTable('Categories',$id);
}
    
//sets
function change_page_title_by_id ($id, $newValue)
{
    SetPageTable('title',$newValue,$id);
}
function create_page ($Title, $Content_URL, $Aurthor, $prevlidge, $Activated, $ID_READ, $ID_WRITE, $Keywords, $CommentID, $isOnRecm, $isOnMenus, $link, $Categories)
{
    SQLQuery("INSERT INTO ".$GLOBALS['table_name_pages']." (Title, Content_URL, Aurthor, prevlidge, Activated, ID_READ, ID_WRITE, Keywords, CommentID, isOnRecm, isOnMenus, link, Categories) values (?, ?, ?, ?,?,?,?,?,?,?,?,?,?) ",[$Title, $Content_URL, $Aurthor, $prevlidge, $Activated, $ID_READ, $ID_WRITE, $Keywords, $CommentID, $isOnRecm, $isOnMenus, $link, $Categories],'');
}
function change_page_Content_URL ($id, $newValue)
{
    SetPageTable('Content_URL',$newValue,$id);
}
function change_page_Aurthor ($id, $newValue)
{
    SetPageTable('Aurthor',$newValue,$id);
}
function change_page_prevlidge ($id, $newValue)
{
    SetPageTable('prevlidge',$newValue,$id);
}
function change_page_DateCreated ($id, $newValue)
{
    SetPageTable('DateCreated',$newValue,$id);
}
function change_page_DateModified  ($id, $newValue)
{
    SetPageTable('DateModified',$newValue,$id);
}
function change_page_Views ($id, $newValue)
{
    SetPageTable('Views',$newValue,$id);
}
function change_page_Activated ($id, $newValue)
{
    SetPageTable('Activated',$newValue,$id);
}
function change_page_ID_READ ($id, $newValue)
{
    SetPageTable('ID_READ',$newValue,$id);
}
function change_page_ID_WRITE ($id, $newValue)
{
    SetPageTable('ID_WRITE',$newValue,$id);
}
function change_page_Keywords ($id, $newValue)
{
    SetPageTable('Keywords',$newValue,$id);
}
function change_page_CommentID ($id, $newValue)
{
    SetPageTable('CommentID',$newValue,$id);
}
function change_page_Likes ($id, $newValue)
{
    SetPageTable('Likes',$newValue,$id);
}
function change_page_Dislikes ($id, $newValue)
{
    SetPageTable('Dislikes',$newValue,$id);
}
function change_page_isOnRecm ($id, $newValue)
{
    SetPageTable('isOnRecm',$newValue,$id);
}
function change_page_isOnMenus ($id, $newValue)
{
    SetPageTable('isOnMenus',$newValue,$id);
}
function change_page_link ($id, $newValue)
{
    SetPageTable('link',$newValue,$id);
}
function change_page_Categories($id, $newValue)
{
    SetPageTable('Categories',$newValue,$id);
}
function remove_page($id)
{
    SQLQuery("DELETE FROM ".$GLOBALS['table_name_pages']." where id=?",[$id],'');
}