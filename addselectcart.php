<?php
session_start();
include "connection.php";

header("Content-Type: application/json");

if (!isset($_SESSION['user_email'])) {
    echo json_encode(["status" => "error", "message" => "User not logged in"]);
    exit();
}

if (!isset($_POST['cart_ids']) || !is_array($_POST['cart_ids'])) {
    echo json_encode(["status" => "error", "message" => "Invalid request"]);
    exit();
}

$email = $_SESSION['user_email'];

$user_query = "SELECT id FROM users WHERE email = ?";
$user_stmt = $conn->prepare($user_query);
$user_stmt->bind_param("s", $email);
$user_stmt->execute();
$user_result = $user_stmt->get_result();

if ($user_result->num_rows == 0) {
    echo json_encode(["status" => "error", "message" => "User not found"]);
    exit();
}

$user = $user_result->fetch_assoc();
$user_id = $user['id'];

$order_query = "INSERT INTO checkout (user_id, product_id, product_name, image, quantity, price)
                SELECT ?, product_id, product_name, image, quantity, price FROM cart WHERE user_id = ? AND id = ?";
$order_stmt = $conn->prepare($order_query);

$delete_query = "DELETE FROM cart WHERE user_id = ? AND id = ?";
$delete_stmt = $conn->prepare($delete_query);

$items_processed = 0;

foreach ($_POST['cart_ids'] as $cart_id) {
    $cart_id = intval($cart_id);

    $check_cart = $conn->prepare("SELECT id FROM cart WHERE user_id = ? AND id = ?");
    $check_cart->bind_param("ii", $user_id, $cart_id);
    $check_cart->execute();
    $result = $check_cart->get_result();

    if ($result->num_rows > 0) {

        $order_stmt->bind_param("iii", $user_id, $user_id, $cart_id);
        if ($order_stmt->execute()) {

            $delete_stmt->bind_param("ii", $user_id, $cart_id);
            $delete_stmt->execute();
            $items_processed++;
        }
    }
}

if ($items_processed > 0) {
    echo json_encode(["status" => "success", "message" => "Items moved to checkout", "redirect" => "checkout.php"]);
} else {
    echo json_encode(["status" => "error", "message" => "No items were moved"]);
}
exit();
