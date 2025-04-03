<?php include "connection.php"; ?>

<nav class="navbar navbar-expand-lg py-3 fixed-top">
    <div class="container-fluid">
        <img src="imgs/CasetifyLogo.png">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Our Products</a>
                </li>
                <li class="nav-item">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <a class="nav-link" href="contactus.php">Contact Us</a>
                    <?php endif; ?>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li class="nav-item">
                        <a href="cart.php"><i class="fa fa-cart-shopping white"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="checkout.php" class="checkout-link">
                            <i class="fa fa-credit-card white"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="account.php"><i class="fa fa-user-circle white"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php"><i class="fa fa-sign-out white"></i> Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a href="login.php"><i class="fa fa-user-circle white"></i> Login</a>
                    </li>
                <?php endif; ?>
            </ul>

        </div>
    </div>
</nav>