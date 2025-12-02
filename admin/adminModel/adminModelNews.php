<?php
class adminModelNews {
  
  public static function getNewsList() {
    $query = "SELECT news.*, category.name, users.username FROM news, category, users WHERE news.category_id=category.id AND news.user_id=users.id ORDER BY `news`.`id` DESC";
    $db = new Database();
    $arr = $db->getAll($query);
    return $arr;
  }

  public static function getAddNews() {
    $test = false;
    if (isset($_POST['save'])) {
      if (isset($_POST['title']) && isset($_POST['text']) && isset($_POST['categoryID'])) {

        $title = $_POST['title'];
        $text = $_POST['text'];
        $categoryID = $_POST['categoryID'];

        // image's type - blob
        $image = addslashes(file_get_contents($_FILES['picture'] ['tmp_name']));

        $sql = "INSERT INTO `news` (`id`, `title`, `text`, `picture`, `category_id`, `user_id`) VALUES (NULL, '$title', '$text', '$image', '$categoryID', '1')";
        $db = new Database();
        $item = $db->executeRun($sql);
        if ($item == true) {
          $test = true;
        }
      }
    }
    return $test;
  }
  
}
?>