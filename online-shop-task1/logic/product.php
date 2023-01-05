<?php
$productDetails = [
    [
        'id' => 1,
        "name" => "Product 1",
        "image" => "img/product-1.jpg",
        "price" => 110,
        "discount" => 0.25,
        "rating" => 3,
        "rating_count" => 100,
        "is_featured" => true,
        "is_recent" => false,
    ],
    [
        'id' => 2,
        "name" => "Product 2",
        "image" => "img/product-2.jpg",
        "price" => 120,
        "discount" => 0.2,
        "rating" => 2,
        "rating_count" => 90,
        "is_featured" => false,
        "is_recent" => true,
    ],
    [
        'id' => 3,
        "name" => "Product 3",
        "image" => "img/product-3.jpg",
        "price" => 140,
        "discount" => 0.11,
        "rating" => 3.5,
        "rating_count" => 80,
        "is_featured" => true,
        "is_recent" => false,
    ],
    [
        'id' => 4,
        "name" => "Product 4",
        "image" => "img/product-4.jpg",
        "price" => 130,
        "discount" => 0.15,
        "rating" => 4.5,
        "rating_count" => 120,
        "is_featured" => false,
        "is_recent" => true,
    ],
    [
        'id' => 5,
        "name" => "Product 5",
        "image" => "img/product-5.jpg",
        "price" => 160,
        "discount" => 0.25,
        "rating" => 4,
        "rating_count" => 130,
        "is_featured" => true,
        "is_recent" => false,
    ],
    [
        'id' => 6,
        "name" => "Product 6",
        "image" => "img/product-6.jpg",
        "price" => 180,
        "discount" => 0.15,
        "rating" => 3,
        "rating_count" => 80,
        "is_featured" => false,
        "is_recent" => true,
    ],
    [
        'id' => 7,
        "name" => "Product 7",
        "image" => "img/product-7.jpg",
        "price" => 190,
        "discount" => 0.1,
        "rating" => 5,
        "rating_count" => 90,

        "is_featured" => true,
        "is_recent" => false
    ],
    [
        'id' => 8,
        "name" => "Product 8",
        "image" => "img/product-8.jpg",
        "price" => 200,
        "discount" => 0.15,
        "rating" => 3.5,
        "rating_count" => 100,
        "is_featured" => false,
        "is_recent" => true,
    ]
];

$getStar = function ($rating) {
    $r = [1, 2, 3, 4, 5];
    foreach ($r as $k) {
        if ($k <= $rating) {
            echo ' <small class="fa fa-star text-primary mr-1"></small>';
        } elseif ($k <= $rating + 0.5) {
            echo ' <small class="fa fa-star-half-alt text-primary mr-1"></small>';
        } else
            echo ' <small class="far fa-star text-primary mr-1"></small>';
    }
}
;