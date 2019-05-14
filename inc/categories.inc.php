 <?php
    include_once 'database.inc.php';
/*
 *
 * All tested on 1-30-2019
 * all works
 */
//get

function get_category_name_by_id($id)
{
    return getCategoryIdTable('CategtoryName',$id);
}
function get_category_id_by_CategtoryName($name)
{
    return getCategoryOtherTable('id','CategtoryName',$name);
}
function get_category_prevlidge($id)
{
    return getCategoryIdTable('prevlidge',$id);
}
function get_category_Aurthor($id)
{
    return getCategoryIdTable('Aurthor',$id);
}
function get_category_DateCreated ($id)
{
    return getCategoryIdTable('DateCreated',$id); // date created
}

//set
function create_category($name, $prevlidge, $aurthor)
{
    $sqlStatement1 = "INSERT INTO ".$GLOBALS['table_name_category']."(CategtoryName,prevlidge,Aurthor)";
    SQLQuery("$sqlStatement1 values ( ?, ?, ?) ",[$name,$prevlidge,$aurthor],'');
}
function change_CategtoryName($id, $newValue)
{
    setCategoryTable('CategtoryName',$newValue,$id);
}
function change_category_prevlidge($id, $newValue)
{
    setCategoryTable('prevlidge',$newValue,$id);
}
function change_category_Aurthor($id, $newValue)
{
    setCategoryTable("Aurthor",$newValue,$id);
}
function change_category_DateCreated($id, $newValue)
{
    setCategoryTable('DateCreated',$newValue,$id);
}
function remove_category($id)
{
    SQLQuery("DELETE FROM ".$GLOBALS['table_name_category']." where id=?",[$id],'');
}
