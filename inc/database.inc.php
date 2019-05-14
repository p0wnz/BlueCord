<?php
    include_once '../settings/optionParser.php';
    $dbUsername = get_option_value('database','database-username'); 
    $dbPassword = get_option_value('database','database-password'); 
    $dbServer = get_option_value('database','database-server');
    $dbname = get_option_value('database','database-name');

    $dsn = 'mysql:host='. $dbServer . ';dbname='.$dbname;
    $pdo = new PDO($dsn, $dbUsername, $dbPassword);
function SQLQuery($sql,$data,$field)
{
    $results = array();
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->execute($data);
    if ($field !="")
        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
            array_push($results, $row[$field]);
    return $results;
}

function GETSQLQuery($tablename, $columnwanted, $byid,$data)
{
    return SQLQuery("SELECT $columnwanted from $tablename where $byid = ?",[$data],$columnwanted);
    
}

function SETSQLQuery($tablename, $columnwanted,$columndata, $byid,$data)
{
    SQLQuery("UPDATE $tablename  SET $columnwanted=? where $byid = ?",[$columndata, $data],$columnwanted);
}

$table_name_menu = get_option_value('database','menu-table-name');

function getMenuIdTable($wanted,$id)
{
    $sqlarray = GETSQLQuery($GLOBALS['table_name_menu'],$wanted,'id',$id);
    if (count($sqlarray) >1) return $sqlarray;
    if ($sqlarray=='' or $sqlarray == null) return false;
    return $sqlarray[0];
}

function SetMenuTable($wanted,$newData,$id)
{
    SETSQLQuery($GLOBALS['table_name_menu'], $wanted,$newData, 'id',$id);
}

function getMenuOtherTable($wanted,$column,$data)
{
    $sqlarray =  GETSQLQuery($GLOBALS['table_name_menu'],$wanted,$column,$data);
    if (count($sqlarray) >1)return $sqlarray;
    if ($sqlarray=='' or $sqlarray == null) return false;
    
    return $sqlarray[0];
}

$table_name_account = get_option_value('database','accounts-table-name');
function getAccountIdTable($wanted,$id)
{
    $sqlarray = GETSQLQuery($GLOBALS['table_name_account'],$wanted,'id',$id);
    if (count($sqlarray) >1) return $sqlarray;
    if ($sqlarray=='' or $sqlarray == null) return false;
    return $sqlarray[0];
}

function SetAccountTable($wanted,$newData,$id)
{
    SETSQLQuery($GLOBALS['table_name_account'], $wanted,$newData, 'id',$id);
}

function getAccountOtherTable($wanted,$column,$data)
{
    $sqlarray =  GETSQLQuery($GLOBALS['table_name_account'],$wanted,$column,$data);
    if (count($sqlarray) >1)return $sqlarray;
    if ($sqlarray=='' or $sqlarray == null) return false;
    
    return $sqlarray[0];
}

$table_name_pages = get_option_value('database','pages-table-name');
function getPageIdTable($wanted,$id)
{
    $sqlarray = GETSQLQuery($GLOBALS['table_name_pages'],$wanted,'id',$id);
    if (count($sqlarray) >1) return $sqlarray;
    if ($sqlarray=='' or $sqlarray == null) return false;
    return $sqlarray[0];
}

function SetPageTable($wanted,$newData,$id)
{
    SETSQLQuery($GLOBALS['table_name_pages'], $wanted,$newData, 'id',$id);
}

function getPageOtherTable($wanted,$column,$data)
{
    $sqlarray =  GETSQLQuery($GLOBALS['table_name_pages'],$wanted,$column,$data);
    if (count($sqlarray) >1)return $sqlarray;
    if ($sqlarray=='' or $sqlarray == null) return false;
    
    return $sqlarray[0];
}

$table_name_media = get_option_value('database','media-table-name');
function getMediaIdTable($wanted,$id)
{
    $sqlarray = GETSQLQuery($GLOBALS['table_name_media'],$wanted,'id',$id);
    if (count($sqlarray) >1) return $sqlarray;
    if ($sqlarray=='' or $sqlarray == null) return false;
    return $sqlarray[0];
}

function SetMediaTable($wanted,$newData,$id)
{
    SETSQLQuery($GLOBALS['table_name_media'], $wanted,$newData, 'id',$id);
}

function getMediaOtherTable($wanted,$column,$data)
{
    $sqlarray =  GETSQLQuery($GLOBALS['table_name_media'],$wanted,$column,$data);
    if (count($sqlarray) >1)return $sqlarray;
    if ($sqlarray=='' or $sqlarray == null) return false;
    
    return $sqlarray[0];
}

$table_name_category = get_option_value('database','categories-table-name');
function getCategoryIdTable($wanted,$id)
{
    $sqlarray = GETSQLQuery($GLOBALS['table_name_category'],$wanted,'id',$id);
    if (count($sqlarray) >1) return $sqlarray;
    if ($sqlarray=='' or $sqlarray == null) return false;
    return $sqlarray[0];
}

function SetCategoryTable($wanted,$newData,$id)
{
    SETSQLQuery($GLOBALS['table_name_category'], $wanted,$newData, 'id',$id);
}

function getCategoryOtherTable($wanted,$column,$data)
{
    $sqlarray =  GETSQLQuery($GLOBALS['table_name_category'],$wanted,$column,$data);
    if (count($sqlarray) >1)return $sqlarray;
    if ($sqlarray=='' or $sqlarray == null) return false;
    
    return $sqlarray[0];
}

$table_name_group = get_option_value('database','group-table-name');

function getGroupIdTable($wanted,$id)
{
    $sqlarray = GETSQLQuery($GLOBALS['table_name_group'],$wanted,'id',$id);
    if (count($sqlarray) >1) return $sqlarray;
    if ($sqlarray=='' or $sqlarray == null) return false;
    return $sqlarray[0];
}

function SetGroupTable($wanted,$newData,$id)
{
    SETSQLQuery($GLOBALS['table_name_group'], $wanted,$newData, 'id',$id);
}

function getGroupOtherTable($wanted,$column,$data)
{
    $sqlarray =  GETSQLQuery($GLOBALS['table_name_group'],$wanted,$column,$data);
    if (count($sqlarray) >1)return $sqlarray;
    if ($sqlarray=='' or $sqlarray == null) return false;
    
    return $sqlarray[0];
}
