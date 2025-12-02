<?php
session_start();
  require_once '../inc/database.php';

  include_once('adminModel/adminModel.php');
  include_once('adminModel/adminModelNews.php');

  include_once('adminController/adminController.php');
  include_once('adminController/adminControllerNews.php');

  include('adminRoute/adminRouting.php');

  echo $response;
?>