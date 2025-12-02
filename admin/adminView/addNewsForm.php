<?php
ob_start();
?>
<div class="container" style="min-height:400px;">
  <div class="col-md-11">
    <h2>Add News Article</h2>

    <?php
    if (isset($test)) {
      if ($test == true) {
        ?>

        <div class="alert alert-info">
          <strong>Article is added. </strong><a href="adminNews"> News List</a>
        </div>

        <?php
      }
      elseif ($test == false) {
        ?>

        <div class="alert alert-warning">
          <strong>Error adding article! </strong><a href="adminNews"> News List</a>
        </div>

        <?php
      }
    }
    else {
      ?>

      <form method="POST" action="addNewsResult" enctype="multipart/form-data">
        <table class="table table-bordered">
          <tr>
            <td>News Article title</td>
            <td><input type="text" name="title" class="form-control" required></td>
          </tr>
          <tr>
            <td>News Article text</td>
            <td><textarea rows="5" name="text" class="form-control" required></textarea></td>
          </tr>
          <tr>
            <td>Category</td>
            <td>
              <select name="categoryID" class="form-control">

                <?php
                foreach ($arr as $row) {
                  echo '<option value="' .$row['id']. '">' .$row['name']. '</option>';
                }
                ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>Picture</td>
            <td>
              <div>
                <input type="file" name="picture" style="color:black;">
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <button type="submit" class="btn btn-primary" name="save">
                <span class="glyphicon glyphicon-plus">Save</span>
              </button>
              <a href="adminNews" class="btn btn-large btn-success">
                <i class="glyphicon glyphicon-backward"></i> &nbsp; Back to List
              </a>
            </td>
          </tr>
        </table>
      </form>

    <?php
    }
    ?>

  </div>
</div>
<?php
$content = ob_get_clean();
include 'adminView/templates/layout.php';
?>