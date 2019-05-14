<?php

//includes here
include_once '../settings/optionParser.php';
include_once 'database.inc.php';
include_once 'categories.inc.php';
include_once 'Account.inc.php';
include_once 'group.inc.php';
include_once 'menu.inc.php';
include_once 'media.inc.php';
include_once 'pages.inc.php';

//php api functions, incomplete keep adding more      
function list_categories()
{
    return SQLQuery("SELECT id from $table_name_category",[],'id');
}
function list_all_user()
{
    return SQLQuery("SELECT id from $table_name_account",[],'id');
}
function list_all_menu()
{
    return SQLQuery("SELECT id from $table_name_menu",[],'id');
}
function list_all_media()
{
    return SQLQuery("SELECT id from $table_name_media",[],'id');
}
function list_all_group()
{
    return SQLQuery("SELECT id from $table_name_group",[],'id');
}
function list_all_pages()
{
    return SQLQuery("SELECT id from $table_name_pages",[],'id');
}

function list_all_page_titles($category)
{
    return getPageOtherTable('id','Categories',$category);
}
function get_page_content($title)
{
    $link = get_page_link($id);
    include_once $link;
}

function get_site_address()
{
    return get_option_value('site','site-address');
}
function get_site_name()
{
    return get_option_value('site','site-name');
}
function get_site_logo()
{
    return get_option_value('Media','logo');
}

function get_pages_by_owner()
{
    return getPageOtherTable('id','Aurthor',$userId);
}
function get_pages_by_likes($like)
{
    return getPageOtherTable('id','Likes',$like);
}
function get_pages_by_dislikes($dislike)
{
    return getPageOtherTable('id','Dislikes',$dislike);
}
function get_pages_by_activated($active)
{
    return getPageOtherTable('id','Activated',$active);
}
function get_users_by_deactivated($active)
{
    return getAccountOtherTable('id','Activated',$active);
}
function get_users_wname($name)
{
    return getAccountOtherTable('id','wanted',$name);
} 
function get_user_by_cookie($cookie)
{
    $tablename = get_option_value('database','accounts-table-name');
    return SQLQuery("SELECT id from $tablename where cookie = ?",[$cookie],'id');
}
function load_css_theme()
{
    $theme_file_name = get_option_value('media','theme-css');
    $site_address = get_option_value('site','site-address');
    $html_tag = "<link rel=\"stylesheet\" href=\"$site_address$theme_file_name\">";
    print($html_tag);
}
function load_css_theme_item($css)
{
    $site_theme_json = get_option_value('media','theme');
    return get_option_value($site_theme_json, $css);
}
function print_css_theme_item($css)
{
    $site_theme_json = get_option_value('media','theme');
    print(get_option_value($site_theme_json, $css));
}
function load_plugin($plugin_name)
{
    
    $plugin_directory = get_option_value('site','site-plugin-folder');
    $plugin_name = "\\".$plugin_name.'.php';
    $plugin_include = $plugin_directory.$plugin_name;
    
    include_once ($plugin_include);
}   
function get_plugin_folder()
{
    return get_option_value('site','site-plugin-folder');
}
function get_image_url($id)
{
    return get_site_address().get_media_link ($id);
}
function load_script($name)
{
    $site_directory = get_option_value('site','site-address');
    $script_file = get_option_value('scripts',$name);
    $script_src = $site_directory . $script_file;
    print("<script src=\"$script_src\"></script>");
}

function get_site_user(){}
function get_pages_by_dateCreated(){}
function get_pages_by_dateModified() {}
function get_comments($id){}
function get_live_chat($id){}
function get_page_random(){}
function get_user_pages($userId){}
function get_user_groups($userId){}
function blue_init(){}