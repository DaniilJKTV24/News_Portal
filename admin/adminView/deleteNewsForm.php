<?php
ob_start();
?>
<div class="container" style="min-height:400px;">
  <div class="col-md-11">
    <h2>Delete News Article</h2>

    <?php
    if (isset($test)) {
      if ($test == true) {
        ?>

        <div class="alert alert-info">
          <strong>Article is deleted. </strong><a href="adminNews"> News List</a>
        </div>

        <?php
      }
      elseif ($test == false) {
        ?>

        <div class="alert alert-warning">
          <strong>Error deleting article! </strong><a href="adminNews"> News List</a>
        </div>

        <?php
      }
    }
    else {
      ?>

      <form method="POST" action="deleteNewsResult?id=<?php echo $id; ?>" enctype="multipart/form-data">
        <table class="table table-bordered">
          <tr>
            <td>News Article title</td>
            <td><input type="text" name="title" class="form-control" required value="<?php echo $details['title']; ?>" readonly></td>
          </tr>
          <tr>
            <td>News Article text</td>
            <td><textarea rows="5" name="text" class="form-control" required readonly><?php echo $details['text'] ?></textarea></td>
          </tr>
          <tr>
            <td>Category</td>
            <td>
              <select name="categoryID" class="form-control" disabled>

                <?php
                foreach ($arr as $row) {
                  echo '<option value="' .$row['id']. '"';
                    if ($row['id'] == $details['category_id']) echo 'selected';
                  echo '>' .$row['name']. '</option>';
                }
                ?>

              </select>
            </td>
          </tr>
          <tr>
            <td>Old Picture</td>
            <td>
              <div>

                <?php
                echo '<img src="data:image/jpeg;base64,' .base64_encode($details['picture']). '" width=150 />';
                ?>

              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <button type="submit" class="btn btn-primary" name="save">
                <span class="glyphicon glyphicon-plus"></span> Delete
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