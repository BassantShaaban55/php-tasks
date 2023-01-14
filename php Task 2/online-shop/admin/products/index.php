<?php
define('BASE_ADMIN_URL', '/online-shop/admin/');
define('BASE_URL', '/online-shop/');
define('BASE_PATH', '../../');
if (session_status() === PHP_SESSION_NONE)
  session_start();

require_once('../layouts/header.php');
require_once('../../logic/products.php');
$products = getProducts();

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Products</h1>
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

          <a class="btn btn-success" href="<?= BASE_ADMIN_URL ?>products/add.php" style="margin-bottom: 20px">Add</a>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Category</th>
                <th>Price</th>
                <th>Discount</th>
                <th colspan="2">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($products as $p) {
                ?>
                <tr>
                  <td><?= $p['id'] ?></td>
                  <td>
                    <?= $p['name'] ?>
                  </td>
                  <td><img src="<?= BASE_URL . $p['image_url'] ?>" width="150" height="150" /></td>
                  <td>
                    <?= $p['category_name'] ?>
                  </td>
                  <td><?= $p['price'] ?></td>
                  <td>
                    <?= $p['discount'] * 100 ?>%
                  </td>

                  <td scope="col">
                    <a class="btn btn-success" href="#">
                      <h7 style="font-weight: bold;">Edit</h7>
                    </a>
                  </td>
                  <td scope="col">


                    <button class="btn btn-danger">
                      <h7 style="font-weight: bold;">Delete</h7>
                    </button>

                  </td>
                </tr>
              <?php
              }
              ?>

            </tbody>
          </table>
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