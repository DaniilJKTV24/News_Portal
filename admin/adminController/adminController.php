<?php
class adminController {

  public static function loginFormSite() {
    include_once('adminView/loginForm.php');
  }
  // Admin authorization form
  public static function loginAction() {
    $logIn = adminModel::userAuthentication();
    if (isset($logIn) and $logIn==true) {
      include_once('adminView/adminStart.php');
    }
    else {
      $_SESSION['errorString'] = 'Incorrect username or password';
      include_once('adminView/loginForm.php');
    }
  }
  // Admin panel exit
  public static function logoutAction() {
    adminModel::userLogout();
    include_once('adminView/loginForm.php');
  }
  // Page not found
  public static function error404() {
    include_once('adminView/error404.php');
  }
  
}
?>