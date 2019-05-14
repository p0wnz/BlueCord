<?php

function throw_error_message(string $message)
{
    print($message.'<br>');
}
$site_settings_folder = "C:\\xampp\\htdocs\\bluecord\\settings\\";
function get_option_value($head, $option)
{
    $file_string = read_file_string($GLOBALS['site_settings_folder'].$head.".json");
    if(!$file_string)
    {
        throw_error_message(" File not Found!");
        return null;
    }
    return json_decode($file_string,true)[$option];
}
function set_option_value($head, $option,  $value)
{
    $file_string = read_file_string($GLOBALS['site_settings_folder'].$head.".json");
    if(!$file_string)
    {
        throw_error_message(" File not found!");
        return false;
    }
    $obj = json_decode($file_string,true);
    try
    {
        $obj[$option] = $value;
        $string_ = json_encode($obj);
        $str_cleaner="";
        foreach (explode (',', $string_) as $new)
        {
            $str_cleaner = $str_cleaner.$new.",\n";
        }
        write_to_file($head.'.json',substr($str_cleaner, 0, -2));
        return true;
    }
    catch(Exception $e)
    {
        print($e->getMessage());
        return false;
    }
}
function read_file_array($file)
{
    if (!file_exists($file))return false;
        return file($file);
}
function read_file_string($file)
{
    if (!file_exists($file))return false;
        $string = "";
        foreach (file($file) as $line)
        {
            $string = $string . $line;
        }
    return $string;
}
function write_to_file($file,$string)
{
    fwrite(fopen($file,'w'),$string);
}