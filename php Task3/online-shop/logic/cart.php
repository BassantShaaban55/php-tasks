<?php
require_once(BASE_PATH . 'dal/dal.php');
function addProductToCart($product)
{
    if (session_status() === PHP_SESSION_NONE)
        session_start();

    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
    $found = false;
    for ($i = 0; $i < count($cart); $i++) {
        if ($cart[$i]['product']['id'] === $product['id']) {
            $cart[$i]['quantity'] += 1;
            $found = true;
        }
    }
    if (!$found) {
        array_push($cart, ['product' => $product, 'quantity' => 1]);
    }
    $_SESSION['cart'] = $cart;
}

function getCart()
{
    if (session_status() === PHP_SESSION_NONE)
        session_start();

    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
    return $cart;
}
function getShipping()
{
    $products = getCart();
    $shipping = 0;
    $sum = 0;

    for ($i = 0; $i < count($products); $i++) {
        $sum = $products[$i]['quantity'] + $sum;

        $shipping = $sum * 10;
    }
    ;
    return $shipping;

}
;

function getSubTotal()
{
    $products = getCart();
    $subTotal = 0;
    $quantitySum = 0;
    $priceSum = 0;

    for ($i = 0; $i < count($products); $i++) {
        $quantitySum = $products[$i]['quantity'];
        $priceSum = $products[$i]['product']['price'];

        $subTotal = ($quantitySum * $priceSum) + $subTotal;
    }
    ;
    return $subTotal;

}
;

function getTotal()
{
    return getShipping() + getSubTotal();
}
;

function increaseProductQuantity($productId)
{
    if (session_status() === PHP_SESSION_NONE)
        session_start();

    $products = getCart();
    for ($i = 0; $i < count($products); $i++) {
        if ($products[$i]['product']['id'] === $productId) {
            $products[$i]['quantity'] += 1;
        }
    }

    $_SESSION['cart'] = $products;

    //return $products;
}
function decreaseProductQuantity($productId)
{
    if (session_status() === PHP_SESSION_NONE)
        session_start();

    $products = getCart();
    for ($i = 0; $i < count($products); $i++) {
        if ($products[$i]['product']['id'] === $productId) {
            if ($products[$i]['quantity'] > 1) {
                $products[$i]['quantity'] -= 1;
            }
        }
    }

    $_SESSION['cart'] = $products;

}

function deleteProductFromCart($productId)
{
    if (session_status() === PHP_SESSION_NONE)
        session_start();

    $products = getCart();
    for ($i = 0; $i < count($products); $i++) {
        if ($products[$i]['product']['id'] === $productId) {
            array_splice($products, $i, 1);
        }
    }

    $_SESSION['cart'] = $products;

}