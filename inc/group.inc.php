 <?php
    include_once 'database.inc.php';
//get 
function get_group_name_by_id($id)
{
    
    return getGroupIdTable('_Name',$id);
}
function get_group_id_by_Name($name)
{
    
    return getGroupOtherTable('id','_Name',$name);
}
function get_group_prevlidge($id)
{
    
    return getGroupIdTable('prevlidge',$id);
}
function get_group_DateCreated ($id)
{
    
    return getGroupIdTable('DateCreated',$id);
}
function get_group_userid ($id)
{
    
    return getGroupIdTable('userid',$id);
}
//set userid
function create_group($name, $prevlidge)
{
    
    SQLQuery("INSERT INTO ".$GLOBALS['table_name_group']."(_Name,prevlidge) values ( ?, ?) ",[$name,$prevlidge],'');
}
function change_groupName($id, $newValue)
{
    
    setGroupTable('_Name',$newValue,$id);
}
function change_group_prevlidge($id, $newValue)
{
    
    setGroupTable('prevlidge',$newValue,$id);
}
function change_group_DateCreated ($id, $newValue)
{
    
    setGroupTable('DateCreated',$newValue,$id);
}
function change_group_userid ($id, $newValue)
{
    
    setGroupTable('userid',$newValue,$id);
}
function remove_group($id)
{
    
    SQLQuery("DELETE FROM ".$GLOBALS['table_name_group']." where id=?",[$id],'');
}
