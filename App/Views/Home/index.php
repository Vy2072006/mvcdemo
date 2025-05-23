<?php require __DIR__ . "/../Layout/homeheader.php";
// var_dump($productlist);
$config = require 'config.php';
$baseURL = $config['baseURL'];
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php foreach ($productlist as $item) { ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= $baseURL . 'Assets/assets/products/' . $item['Image'] ?>" alt="<?= $item['Image'] ?>" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price-->
                                <?= $item['Price'] ?>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            <!-- <div class="text-center mb-2"><a class="btn mt-auto btn-primary" href="#">Add to card</a></div> -->
                            <form method="post" action="<?= $baseURL . 'cart/add' ?>">
                                <input type="hidden" name="product_id" value="<?= $item['Id'] ?>">
                                <!-- <button type="submit" class="btn btn-primary btn-sm">Add to Cart</button> -->
                                <!-- <button type="submit" class="btn mt-auto btn-primary">Add to Cart</button> -->
                                <button type="submit" class="btn btn-primary btn-lg mt-auto">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php
            } ?>


            <div class="card h-100">
                <!-- Product image-->
                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">Popular Item</h5>
                        <!-- Product reviews-->
                        <div class="d-flex justify-content-center small text-warning mb-2">
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                        </div>
                        <!-- Product price-->
                        $40.00
                    </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<?php require __DIR__ . "/../Layout/homefooter.php"
?>