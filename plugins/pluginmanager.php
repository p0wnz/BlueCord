<?php
include_once '../inc/Blue.inc.php';
function print_plugins()
{
  $dir = get_plugin_folder();   
  $files = scandir($dir, 1);
  for ($i=0; $i < count($files); $i++) 
  { 
      $element = $files[$i];
      if ($element == '.' || $element == '..') continue;
      if (strpos( $element,'.php') == false) continue;
      $element = explode('.',$element)[0];
      print("<tr>");
      print("<th>$i</th><th>$element</th><th><button type=\"button\" class=\"btn btn-danger\" style=\"padding-top:0;padding-bottom:0;\">Delete plugin</button></th>");
      print("</tr>");
  }
}

?>
<style>

</style>
<div class="container border border-primary rounded mx-auto mb-1 mt-1">
    <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th >#</th>
              <th >plugins</th>
              <th><button type="button" class="btn btn-success" style="padding-top:0;padding-bottom:0;">Add Plugin</button></th>
            </tr>
          </thead>
          <tbody>
            <?php 

            print_plugins();
            ?>
          </tbody>
    </table>
</div>