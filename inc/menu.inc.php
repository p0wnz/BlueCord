 <?php
    include_once 'database.inc.php';
/*
 *Not tested but probably werks
 * 
 */
//get
function get_menu_name_by_id($id)
{
    return getMenuIdTable('prevlidge',$id); 
}
function get_menu_id_by_Name($name)
{
    return getMenuOtherTable('id','_name',$name);
}
function get_menu_prevlidge($id)
{
    return getMenuIdTable('prevlidge',$id); 
}
function get_menu_type($id)
{
    return getMenuIdTable('_type',$id); 
}
function get_menu_DateCreated($id)
{
    return getMenuIdTable('DateCreated',$id); 
}
function get_menu_id_pages ($id)
{
    return getMenuIdTable('id_Pages',$id); 
}

//set
function create_menu($id_Pages, $prevlidge, $_type, $_name)
{
    SQLQuery("INSERT INTO ".$GLOBALS['table_name_menu']." (id_Pages, prevlidge, _type, _name) values (?, ?, ?, ?) ",[$id_Pages, $prevlidge, $_type, $_name],'');
}
function change_menu_Name($id, $newvalue)
{
    setMenuTable('_name',$newValue,$id);
}
function change_menu_prevlidge($id, $newvalue)
{
    setMenuTable('prevlidge',$newValue,$id);
}
function change_menu_type($id, $newvalue)
{
    setMenuTable('_type',$newValue,$id);
}
function change_menu_DateCreated ($id, $newvalue)
{
    setMenuTable('DateCreated',$newValue,$id);
}
function change_menu_id_pages ($id, $newvalue)
{
    setMenuTable('id_Pages',$newValue,$id);
}
function remove_menu($id)
{
    SQLQuery("DELETE FROM ".$GLOBALS['table_name_menu']." where id=?",[$id],'');
}