<?php
include "connection.php";

if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['user_email'];

$user_query = "SELECT * FROM users WHERE email = ?";
$user_stmt = $conn->prepare($user_query);
$user_stmt->bind_param("s", $email);
$user_stmt->execute();
$user_result = $user_stmt->get_result();

if ($user_result->num_rows == 0) {
    echo "User not found!";
    exit();
}

$user = $user_result->fetch_assoc();

$user_id = $user['id'];
$user_name = $user['name'];
$user_email = $user['email'];
$user_contact = $user['contactno'];
$user_address = $user['address'];
$user_city = $user['city'];

$checkout_query = "SELECT * FROM checkout WHERE user_id = ?";
$checkout_stmt = $conn->prepare($checkout_query);
$checkout_stmt->bind_param("i", $user_id);
$checkout_stmt->execute();
$checkout_result = $checkout_stmt->get_result();
?>

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
    <link rel="stylesheet" href="css/checkout.css">
</head>

<body>

    <?php include "header.php"; ?>

    <section id="checkout">
        <section id="checkout">
            <div class="container mt-5">
                <div class="container text-center mt-5 pt-5">
                    <h2 class="font-weight-bold">Checkout Items</h2>
                    <hr class="mx-auto">
                </div>
                <?php if ($checkout_result->num_rows > 0): ?>
                    <table>
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Image</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            while ($item = $checkout_result->fetch_assoc()) {
                                $total_price = $item['price'] * $item['quantity'];
                                $total += $total_price;
                            ?>
                                <tr>
                                    <td><?php echo $item['product_name']; ?></td>
                                    <td><img src="<?php echo $item['image']; ?>" alt="Product Image" width="50"></td>
                                    <td><?php echo $item['quantity']; ?></td>
                                    <td><?php echo number_format($item['price'], 2); ?></td>
                                    <td><?php echo number_format($total_price, 2); ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <p><strong>Total Amount: <?php echo number_format($total, 2); ?></strong></p>
                <?php else: ?>
                    <p>No items in checkout.</p>
                <?php endif; ?>
            </div>

            <div class="checkout-actions">
                <a href="payment.php" class="submitbtn">Proceed to Payment</a>
                <a href="cart.php" class="submitbtn">Back to Cart</a>
            </div>

            <div class="container mt-5">
                <div class="container text-center mt-5 pt-5">
                    <h2 class="font-weight-bold">Delivery Details</h2>
                    <hr class="mx-auto">
                </div>
                <p>Name: <?php echo $user_name; ?></p>
                <p>Email: <?php echo $user_email; ?></p>
                <p>Contact: <?php echo $user_contact; ?></p>
                <p>Address: <?php echo $user_address; ?></p>
                <p>City: <?php echo $user_city; ?></p>
            </div>
        </section>

</body>

</html>