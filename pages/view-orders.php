<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600&family=Poppins:ital,wght@0,400;0,500;0,700;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/view-items.css">
    <title>Admin - View Orders</title>
</head>
<body>
    <main>
        <div class="orders">
            <div class="outer-container">
                <div class="inner-container">
                    <table class="order-table">
                        <thead>
                            <tr>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
</html> -->





<?php
include('../includes/connection.php');

// Fetch all orders from the database
$all_orders = mysqli_query($conn, "SELECT * FROM orders");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600&family=Poppins:ital,wght@0,400;0,500;0,700;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/view-items.css">
    <title>View Orders</title>
</head>

<body>
    <!-- header section -->
    <?php include('../includes/admin-header.php') ?>
    <div class="view-item-container">
    <p class="item-list-title">Active - Orders</p>
        <div class="outer-wrapper">
            <table class="inner-wrapper">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer ID</th>
                        <th>Customer Name</th>
                        <th>Payment Type</th>
                        <th>Grand Total</th>
                        <th>Order Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($all_orders) > 0) {
                        // fetch data from database
                        while ($row = mysqli_fetch_assoc($all_orders)) {
                            $order_id = $row['order_id'];
                            $customer_id = $row['customer_id'];
                            $customer_name = $row['customer_name'];
                            $payment_type = $row['payment_type'];
                            $grand_total = $row['grand_total'];
                            $other_details = unserialize($row['other_details']);
                    ?>
                            <tr>
                                <td class="table-data"><?php echo $order_id ?></td>
                                <td class="table-data"><?php echo $customer_id ?></td>
                                <td class="table-data"><?php echo $customer_name ?></td>
                                <td class="table-data"><?php echo $payment_type ?></td>
                                <td class="table-data"><?php echo $grand_total ?></td>
                                <td class="table-data other-details-col">
                                    <?php
                                    // Display order details
                                    foreach ($other_details as $item) {
                                        echo '<div class="item-details">';
                                        echo '<span class="item-name">' . $item['item_name'] . '</span>';
                                        echo '<span class="quantity">Quantity: ' . $item['quantity'] . '</span>';
                                        echo '</div>';
                                    }
                                    ?>
                                </td>
                            </tr>

                    <?php
                        }
                    } else {
                        echo "No orders found.";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include('../includes/footer.php'); ?>
    <script src="../assets/js/script.js"></script>
</body>

</html>