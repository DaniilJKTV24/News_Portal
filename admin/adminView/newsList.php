<?php
ob_start();
?>
<h2>News Articles List</h2>
<div class="container" style="min-height:400px;">
  <div style="margin:20px;">
    <a class="btn btn-primary" href="addNews" role="button">Add news</a>
  </div>
  <div class="col-md-11">
    <table class="table table-bordered table-responsive">
      <tr>
        <th width="10%">ID</th>
        <th width="70%">Header News</th>
        <th width="20%"></th>
      </tr>
      <?php
      foreach($arr as $row) {
        echo '<tr>';
        echo '<td>' .$row['id']. '</td>';
        echo '<td><b>Title: </b>' .$row['title']. '<br>';
        echo '<b>Category: </b><i>' .$row['name']. '</i>';
        echo '<br><b>Author: </b><i>' .$row['username']. '</i>';
        echo '</td>';
        echo '<td>
        <a href="editNews?id=' .$row['id']. '">EDIT <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
        <a href="deleteNews?id=' .$row['id']. '">DELETE <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
        </td>';
        echo '</tr>';
      }
      ?>

    </table>
  </div>
</div>
<?php
$content = ob_get_clean();
include 'adminView/templates/layout.php';
?>