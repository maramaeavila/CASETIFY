<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casetify</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/index.css">

</head>

<body>
    <?php
    include "header.php";
    ?>

    <header>
        <h1>CASETIFY COLLECTION</h1>
        <p>Your Style, Your Case.</p>
    </header>

    <section id="featured-products">
        <h2>Featured Products</h2>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide product-card">
                    <img src="uploads/prod1.jpg" alt="Product 1">
                    <h3>Product Name 1</h3>
                    <p>₱ 19.99</p>
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>
                <div class="swiper-slide product-card">
                    <img src="uploads/prod2.jpg" alt="Product 2">
                    <h3>Product Name 2</h3>
                    <p>₱ 24.99</p>
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>
                <div class="swiper-slide product-card">
                    <img src="uploads/prod3.jpg" alt="Product 3">
                    <h3>Product Name 3</h3>
                    <p>₱ 29.99</p>
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>
                <div class="swiper-slide product-card">
                    <img src="uploads/FB_IMG_1742189601368.jpg" alt="Product 3">
                    <h3>Product Name 3</h3>
                    <p>₱ 29.99</p>
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>


    <section id="categories" class="w-100">
        <div>
            <h1>Top Categories</h1>
        </div>
        <div class="row p-0 m-0">
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="./imgs/cases.jpg">
                <div class="details">
                    <h2>Cases</h2>
                    <a href="product.php?category=Cases" class="btn" role="button">Shop Now</a>
                </div>
            </div>
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="./imgs/airpods.jpg">
                <div class="details">
                    <h2>Airpods</h2>
                    <a href="product.php?category=Airpods" class="btn" role="button">Shop Now</a>
                </div>
            </div>
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="./imgs/accessories.jpg">
                <div class="details">
                    <h2>Accessories</h2>
                    <a href="product.php?category=Accessories" class="btn" role="button">Shop Now</a>
                </div>
            </div>
        </div>
    </section>

    <?php
    include "aboutus.php";
    ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/index.js"></script>

</html>