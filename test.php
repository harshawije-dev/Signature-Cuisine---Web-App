<?php
session_start();
include('your-database-connection-file.php'); // Include your database connection file

if (isset($_POST['update_cart'])) {
    // Handle cart item update logic
    $cart_id = $_POST['cart_id'];
    $new_quantity = $_POST['cart_quantity'];

    // Perform the update in the database
    $update_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$new_quantity' WHERE cart_id = '$cart_id'");
    if ($update_query) {
        header("Location: your-cart-page.php"); // Redirect to the cart page after update
        exit();
    } else {
        die("Update failed: " . mysqli_error($conn));
    }
}

if (isset($_GET['remove'])) {
    // Handle item removal logic
    $cart_id_to_remove = $_GET['remove'];

    // Perform the removal in the database
    $remove_query = mysqli_query($conn, "DELETE FROM `cart` WHERE cart_id = '$cart_id_to_remove'");
    if ($remove_query) {
        header("Location: your-cart-page.php"); // Redirect to the cart page after removal
        exit();
    } else {
        die("Removal failed: " . mysqli_error($conn));
    }
}

if (isset($_GET['delete_all'])) {
    // Handle delete all items logic
    // Perform the deletion in the database
    $delete_all_query = mysqli_query($conn, "DELETE FROM `cart` WHERE customer_id = '$customer_id'");
    if ($delete_all_query) {
        header("Location: your-cart-page.php"); // Redirect to the cart page after deletion
        exit();
    } else {
        die("Deletion failed: " . mysqli_error($conn));
    }
}

if (isset($_POST['proceed_to_checkout'])) {
    // Handle checkout logic and save order to the order table
    $order_query = mysqli_query($conn, "INSERT INTO `orders` (customer_id, total_amount) VALUES ('$customer_id', '$grand_total')");
    if ($order_query) {
        // Retrieve the order ID
        $order_id = mysqli_insert_id($conn);

        // Loop through cart items and save them to order_items table
        $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE customer_id = '$customer_id'");
        while ($fetch_cart = mysqli_fetch_assoc($cart_query)) {
            $item_name = $fetch_cart['name'];
            $item_price = $fetch_cart['price'];
            $item_quantity = $fetch_cart['quantity'];

            // Insert each item into the order_items table
            $order_item_query = mysqli_query($conn, "INSERT INTO `order_items` (order_id, item_name, item_price, item_quantity) VALUES ('$order_id', '$item_name', '$item_price', '$item_quantity')");
            if (!$order_item_query) {
                die("Order item insertion failed: " . mysqli_error($conn));
            }
        }

        // Clear the cart after the order is successfully placed
        mysqli_query($conn, "DELETE FROM `cart` WHERE customer_id = '$customer_id'");

        header("Location: your-order-confirmation-page.php?order_id=$order_id");
        exit();
    } else {
        die("Order insertion failed: " . mysqli_error($conn));
    }
}
?>











<?php
include('../includes/connection.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $paymentType = mysqli_real_escape_string($conn, $_POST['payment_type']);
    $grandTotal = $grand_total; // You already have this value from the previous page

    // Fetch items from the cart
    $cartQuery = mysqli_query($conn, "SELECT * FROM cart WHERE customer_id = '$customer_id'");
    $orderedItems = [];

    while ($fetchCart = mysqli_fetch_assoc($cartQuery)) {
        $orderedItems[] = [
            'item_id' => $fetchCart['item_id'],
            'quantity' => $fetchCart['quantity'],
        ];
    }

    // Serialize the ordered items
    $serializedItems = serialize($orderedItems);

    // Insert the order details into the orders table
    $insertOrderQuery = "INSERT INTO orders (customer_id, payment_type, grand_total, order_details) VALUES ('$customer_id', '$paymentType', '$grandTotal', '$serializedItems')";
    $result = mysqli_query($conn, $insertOrderQuery);

    if ($result) {
        // Clear the cart or perform other actions if needed
        

        header("location: success_page.php"); // Redirect to a success page
        exit();
    } else {
        // Handle the case where the order insertion fails
        echo "Error inserting order: " . mysqli_error($conn);
    }



} else {
    // If the form is not submitted, redirect to the cart page
    header("location: cart.php");
    exit();
}
?>
