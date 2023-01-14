<?php
define('BASE_ADMIN_URL', '/online-shop/admin/');
define('BASE_URL', '/online-shop/');
define('BASE_PATH', '../../');
if (session_status() === PHP_SESSION_NONE)
  session_start();

require_once('../../logic/categories.php');
require_once('../../logic/sizes.php');
require_once('../../logic/colors.php');
require_once('../../logic/products.php');
require_once('../../logic/validation.php');
require_once('../../logic/files.php');

$categories = getCategories();
$colors = getColors();
$sizes = getSizes();
require_once('../layouts/header.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Product</h1>
        </div>

      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <form class="row">
            <div class="form-group col-6">
              <label>Name</label>
              <input name="name" class="form-control" />

            </div>
            <div class="form-group col-6">
              <label>Image</label>
              <input name="image" type="file" />

            </div>
            <div class="form-group col-12">
              <label>Description</label>
              <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="form-group col-6">
              <label>Price</label>
              <input name="price" class="form-control" type="number" min="0" />

            </div>
            <div class="form-group col-6">
              <label>Discount %</label>
              <input name="discount" type="number" min="0" max="100" class="form-control" />

            </div>
            <div class="form-group col-6">
              <label>Bar Code</label>
              <input name="bar_code" class="form-control" />
            </div>
            <div class="form-group col-6">
              <label>Category</label>
              <select name="category_id" class="form-control">
                <?php
                //foreach ($categories as $category) {
                // echo '<option value="' . $category['id'] . $category['name'] . '</option>';
                // }
                ?>
              </select>
            </div>

            <div class="form-group col-6">
              <label>Color</label>
              <select name="color_id" class="form-control">
                <?php
                // foreach ($colors as $c) {
                //   echo '<option value="' . $c['id'] . $c['name'] . '</option>';
                // }
                ?>
              </select>
            </div>
            <div class="form-group col-6">
              <label>Size</label>
              <select name="size_id" class="form-control">
                <?php
                // foreach ($sizes as $s) {
                //   echo '<option value="' . $s['id'] . $s['name'] . '</option>';
                // }
                ?>
              </select>
            </div>
            <div class="form-group col-6">
              <label>Recent</label>
              <input type="checkbox" name="is_recent" />
            </div>
            <div class="form-group col-6">
              <label>Featured</label>
              <input type="checkbox" name="is_featured" />
            </div>
            <button class="btn btn-success">Add</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
          </form>
        </div>
      </div>

    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<?php
require_once('../layouts/footer.php');
?>