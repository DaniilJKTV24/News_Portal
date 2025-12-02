<?php
class adminControllerNews {
  // List news articles
  public static function NewsList() {
    $arr = adminModelNews::getNewsList();
    include_once 'adminView/newsList.php';
  }
}
?>