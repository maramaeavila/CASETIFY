<?php include "connection.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/cart.css">
</head>

<body>

    <?php include "header.php"; ?>

    <section id="cart">
        <div class="container mt-5">
            <div class="container text-center mt-5 pt-5">
                <h2 class="font-weight-bold">My Cart</h2>
                <hr class="mx-auto">
            </div>
            <table>
                <thead>
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                        <th>Product</th>
                        <th>Image</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody id="cart-table">
                    <!-- Cart items will be loaded here -->
                </tbody>
            </table>

            <h4 class="mt-5">Total: ₱ <span id="total-amount">0.00</span></h4>

            <button id="add-selected" class="submitbtn">Add Selected to Order</button>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/cart.js"></script>

</body>

</html>