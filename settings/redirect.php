<?php
    include_once 'optionParser.php';
    $site_settings_folder = "C:\\xampp\\htdocs\\bluecord\\settings\\";
    function get_link_page($link)
    {
        return get_option_value('links',$link);
    }
    function redirect()
    {
        $site_link = basename($_SERVER['PHP_SELF']);
        $new_link = get_link_page($site_link);
        $site_header = get_option_value('site',"site-address");
        if (!$new_link) return;
        header("Location: $site_header$new_link");
        print("invaild page");
    }
?>