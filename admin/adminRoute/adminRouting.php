<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];

if ($path == '' OR $path == 'index.php') {
  // The main page
  $response = adminController::loginFormSite();
}
elseif ($path == 'login') {
  // Login form
  $response = adminController::loginAction();
}
elseif ($path == 'logout') {
  // Logout
  $response = adminController::logoutAction();
}

elseif ($path == 'adminNews') {
  $response = adminControllerNews::NewsList();
}

elseif ($path == 'addNews') {
  $response = adminControllerNews::addNewsForm();
}
elseif ($path == 'addNewsResult') {
  $response = adminControllerNews::addNewsResult();
}

else {
  // Page does not exist
  $response = adminController::error404();
}

?>