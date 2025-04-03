<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casetify</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/index.css">

</head>

<body>
    <?php
    include "header.php";
    ?>

    <section id="aboutus">
        <div class="about-container">
            <div class="about-image">
                <img src="imgs/aboutus.jpg" alt="About Us Image">
            </div>
            <div class="about-text">
                <h2>ABOUT US</h2>
                <p><span class="first-letter">W</span>elcome to <b>CASETiFY</b>, your go-to online store for stylish and high-quality phone cases,
                    AirPods accessories, and phone essentials. We offer trendy, durable, and affordable accessories
                    to keep your devices protected and looking great. Shop with us for the perfect blend of
                    <b>style and function</b>!
                </p>
                <div class="social-icons">
                    <i class="fa-brands fa-facebook text-primary fs-3 mx-2" data-bs-toggle="modal" data-bs-target="#socialModal" data-type="facebook"></i>
                    <i class="fa-solid fa-phone text-success fs-3 mx-2" data-bs-toggle="modal" data-bs-target="#socialModal" data-type="phone"></i>
                    <i class="fa-solid fa-envelope text-danger fs-3 mx-2" data-bs-toggle="modal" data-bs-target="#socialModal" data-type="email"></i>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="socialModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background-color: #EAA79C; color:white; padding: 0;">
                <div class="modal-header" style="padding: 20px;">
                    <h5 class="modal-title" id="modalLabel">Contact Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalContent" style="background-color:white; color:black; padding: 20px;">
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/aboutus.js"></script>

</html>