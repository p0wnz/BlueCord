<?php
    include_once '../settings/optionParser.php';
    $page_name = basename($_SERVER['PHP_SELF']);
    $actual_page = get_option_value('links',$page_name);
    $site_page = get_option_value('site','site-address');
?>
<script>
    
    function bar()
    {
        history.pushState(null, null, <?php print("\"$site_page$actual_page\"");?>);
    }
    window.addEventListener('DOMContentLoaded', bar, false);
</script>