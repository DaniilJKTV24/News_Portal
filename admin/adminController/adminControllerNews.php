<?php
class adminControllerNews {
  // List news articles
  public static function NewsList() {
    $arr = adminModelNews::getNewsList();
    include_once 'adminView/newsList.php';
  }

  public static function addNewsForm() {
    $arr = adminModelCategory::getCategorylist();
    include_once('adminView/addNewsForm.php');
  }

  public static function addNewsResult() {
    $test = adminModelNews::getAddNews();
    include_once('adminView/addNewsForm.php');
  }
}
?>