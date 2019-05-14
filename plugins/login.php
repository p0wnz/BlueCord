<?php 

$image_login_logo = get_image_url(6000004);
include_once "../inc/blue.inc.php";
?>


<style>
  .form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 10% auto;
  }
</style>


<?php
function print_error_message($error)
{
  print("<div class=\"alert alert-danger\" role=\"alert\">");
    print("$error");
  print("</div>");
}

  if($_GET != Array())
  {
    if (isset($_GET['error']))
    {
      print_error_message($_GET['error']);
    }
  }
?>




<form class="form-signin text-center" method=POST action="<?php print(get_option_value('site','site-address').'/plugins/userlogin.php');?>">
  <img class="mb-4" src="<?php print($image_login_logo); ?>" alt="" width="200" height="130">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

  <label for="inputEmail" class="sr-only">Email address</label>
  <input name=login type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">

  <label for="inputPassword" class="sr-only">Password</label>
  <input name=pass type="password" id="inputPassword" class="form-control" placeholder="Password" required="">


  <div class="custom-control custom-checkbox">

    <input type="checkbox" class="custom-control-input" id="customCheck1">
    <label class="custom-control-label" for="customCheck1">Remeber me!</label>

  </div>

  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">© 2019</p>
</form>














