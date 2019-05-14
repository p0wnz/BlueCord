<?php 
    include_once '../inc/blue.inc.php';
    include_once '../settings/optionParser.php';
    global $page_id;

    if (!empty($page_id)) $title =get_page_title_by_id(  $page_id);
    
    else $title='no title';
    function navmenu_load_example()
{ 
    navmenu_whole();
    navmenu_head('list');
    navmenu_vertical_item('item1','#');
    navmenu_vertical_item('item2','#');
    navmenu_vertical_item('item3','#');
    
    navmenu_end();

    navmenu_head('list');
    navmenu_vertical_item('item1','#');
    navmenu_vertical_item('item2','#');
    navmenu_vertical_item('item3','#');
    navmenu_end();
    navmenu_head('list');
    navmenu_vertical_item('item1','#');
    navmenu_vertical_item('item2','#');
    navmenu_vertical_item('item3','#');
    navmenu_end();


    navbar_main_head();
    navbar_horizontal_item("Home","#",false,true);
    navbar_horizontal_item("link","#",false,false);
    navbar_horizontal_item("disabled","#",true,true);
    
    
    
    navbar_main_head_end();
    push_right();
    navmenu_search_form();
    navmenu_whole_end();
    
    

    
    
}
function navmenu_dropdown_load($menu,$display)
{ 
     
    
}


function navbar_main_head()
{
    print('<ul class="navbar-nav ">');
}
function navbar_horizontal_item($name,$link,$isDisabled,$isActive)
{
    $disabled = ($isDisabled) ? "disabled" : '';
    $active = ($isActive) ? "active" : '';
    print("<li class=\"nav-item $active\"><a class=\"nav-link $disabled\" href=\"$link\">$name </a></li>");
}
function navbar_main_head_end()
{
    print('</ul>');
}

function navmenu_head($name)
{
    print("<div class='nav-item dropdown show' >");
    print('<style>.pad{color:#fff;} .pad:hover{color:#aaa;}</style><a class="dropdown-toggle btn nav-item nav-link pad " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$name.'</a>');
    print(' <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">');
}
function navmenu_vertical_item($name,$link)
{
    print("<a class=\"dropdown-item \" href=\"$link\">$name</a>");
}
function navmenu_end()
{
print('</div></div>');
}
function navmenu_whole()
{
    print('<div class=" collapse navbar-collapse" id="navbarsExampleDefault">');
}
function navmenu_whole_end()
{
    print("</div>");
}
function push_right()
{
    print("<ul class=\"mr-auto \" > </ul>");
}
function navmenu_site_mobile_button()
{
    print('<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>');
}


function navmenu_search_form()
{
    print('<form class="form-inline my-2 my-lg-0">');
    print('<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">');
    print('<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button></form>');

}
function site_name_button($name,$link)
{
    $image_logo = get_image_url(6000001);
    print("<a class=\"navbar-brand\" href=\"$link\"><img src=\"$image_logo\" width=36 height=36> $name</a>");
}
?>
<html>
<title><?php print($title);?></title>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <?php
  load_script('jquery-js');
 load_script('bootstrap-bundle-js');//

  load_css_theme(); ?>
</head>

<body>
<div style="min-height:100%;position:relative;">
<header class="<?php print_css_theme_item('css-header'); ?> ">


<?php 
  navmenu_site_mobile_button();

  site_name_button(get_site_name(),get_site_address());
  
  navmenu_load_example(); 
  
?>

</header>