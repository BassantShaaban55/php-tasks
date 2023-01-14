<?php
define('BASE_PATH', '../');
require_once('../logic/cart.php');
if (isset($_REQUEST['product_id'])) {
    deleteProductFromCart($_REQUEST['product_id']);
}
header('Location:../cart.php');
die();
?>