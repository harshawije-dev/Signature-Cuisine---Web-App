<?php
require_once "connection.php";
$sql_pizza = "SELECT * FROM menu WHERE CATEGORY='pizza'";
$sql_rice = "SELECT * FROM menu WHERE CATEGORY='rice'";
$sql_burger = "SELECT * FROM menu WHERE CATEGORY='burger'";
$sql_dessert = "SELECT * FROM menu WHERE CATEGORY='dessert'";
$sql_beverage = "SELECT * FROM menu WHERE CATEGORY='beverage'";

$all_pizza_items = $conn->query($sql_pizza);
$all_rice_items = $conn->query($sql_rice);
$all_burgers_items = $conn->query($sql_burger);
$all_dessert_items = $conn->query($sql_dessert);
$all_beverage_items = $conn->query($sql_beverage);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600&family=Poppins:ital,wght@0,400;0,500;0,700;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="Styles/index.css">
    <link rel="stylesheet" href="Styles/menu.css">
    <title>Menu</title>
</head>

<body>
    <header id="navbar">
        <nav>
            <div class="nav-logo">
                <h1>Signature Cuisine</h1>
            </div>
            <div class="nav-mid-section">

            </div>
            <div class="nav-right-section">
                <ul>
                    <li class="underline"><a href="index.html">Home</a></li>
                    <li class="underline"><a href="gallery.html">Gallery</a></li>
                    <li class="underline"><a href="#">Menu</a></li>
                    <li class="underline"><a href="index.html#popular-dishes">Offers</a></li>
                    <li class="underline"><a href="index.html#facilities">Facilities</a></li>
                    <li class="underline"><a href="#">About Us</a></li>
                </ul>
            </div>
            <div class="login-section">
                <p class="js-log-menu-btn">User<span class="material-symbols-outlined">
                        account_circle
                    </span></p>
                <div class="sign-up-menu display-off js-login-menu">
                    <p>Log In</p>
                    <p>Sign Up</p>
                </div>
                <span class="material-symbols-outlined nav-menu-icon js-nav-toggle">
                    menu
                </span>
            </div>
            <div class="mobile-nav-section display-off js-mobile-nav">
                <ul>
                    <li class="underline"><a href="index.html">Home</a></li>
                    <li class="underline"><a href="gallery.html">Gallery</a></li>
                    <li class="underline"><a href="#">Menu</a></li>
                    <li class="underline"><a href="#popular-dishes">Offers</a></li>
                    <li class="underline"><a href="#facilities">Facilities</a></li>
                    <li class="underline"><a href="#">About Us</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <p class="menu-main-title">Menu</p>
        <div class="menu-container">
            <p class="categories-title">Categories</p>
            <div class="menu-categories">
                <a href="#catagory-pizza">Pizzas</a>
                <a href="#catagory-rice">Rice Dishes</a>
                <a href="#category-burger">Burgers</a>
                <a href="#category-desserts">Desserts</a>
                <a href="#category-beverages">Beverages</a>
            </div>
            <div class="category-set">
                <div id="catagory-pizza">
                    <p class="category-title">Pizzas</p>
                    <div class="item-list">
                        <?php
                        while ($row = mysqli_fetch_assoc($all_pizza_items)) {
                        ?>
                            <div class="item">
                                <div class="item-image">
                                    <img src="images/upload/item/<?php echo $row["IMAGE"] ?>" alt="">
                                </div>
                                <div class="item-details">
                                    <p class="item-name"><?php echo $row["NAME"] ?></p>
                                    <p class="item-description"> <?php echo $row["DESCRIPTION"] ?> </p>
                                    <div class="item-price-and-qt">
                                        <div class="item-price"><?php echo "Rs." . $row["PRICE"] ?></div>
                                        <div class="item-quantity">
                                            <span>QTY </span><input type="number" name="quantity" min="1" max="15">
                                        </div>
                                    </div>
                                    <button class="add-to-order-btn">Add to Order</button>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div id="catagory-rice" class="category-gap">
                    <p class="category-title">Rice Dishes</p>
                    <div class="item-list">
                        <?php
                        while ($row = mysqli_fetch_assoc($all_rice_items)) {
                        ?>
                            <div class="item">
                                <div class="item-image">
                                    <img src="images/upload/item/<?php echo $row["IMAGE"] ?>" alt="">
                                </div>
                                <div class="item-details">
                                    <p class="item-name"><?php echo $row["NAME"] ?></p>
                                    <p class="item-description"> <?php echo $row["DESCRIPTION"] ?> </p>
                                    <div class="item-price-and-qt">
                                        <div class="item-price"><?php echo "Rs." . $row["PRICE"] ?></div>
                                        <div class="item-quantity">
                                            <span>QTY </span><input type="number" name="quantity" min="1" max="15">
                                        </div>
                                    </div>
                                    <button class="add-to-order-btn">Add to Order</button>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div id="category-burger" class="category-gap">
                    <p class="category-title">Burgers</p>
                    <div class="item-list">
                        <?php
                        while ($row = mysqli_fetch_assoc($all_burgers_items)) {
                        ?>
                            <div class="item">
                                <div class="item-image">
                                    <img src="images/upload/item/<?php echo $row["IMAGE"] ?>" alt="">
                                </div>
                                <div class="item-details">
                                    <p class="item-name"><?php echo $row["NAME"] ?></p>
                                    <p class="item-description"> <?php echo $row["DESCRIPTION"] ?> </p>
                                    <div class="item-price-and-qt">
                                        <div class="item-price"><?php echo "Rs." . $row["PRICE"] ?></div>
                                        <div class="item-quantity">
                                            <span>QTY </span><input type="number" name="quantity" min="1" max="15">
                                        </div>
                                    </div>
                                    <button class="add-to-order-btn">Add to Order</button>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div id="category-desserts" class="category-gap">
                    <p class="category-title">Desserts</p>
                    <div class="item-list">
                        <?php
                        while ($row = mysqli_fetch_assoc($all_dessert_items)) {
                        ?>
                            <div class="item">
                                <div class="item-image">
                                    <img src="images/upload/item/<?php echo $row["IMAGE"] ?>" alt="">
                                </div>
                                <div class="item-details">
                                    <p class="item-name"><?php echo $row["NAME"] ?></p>
                                    <p class="item-description"> <?php echo $row["DESCRIPTION"] ?> </p>
                                    <div class="item-price-and-qt">
                                        <div class="item-price"><?php echo "Rs." . $row["PRICE"] ?></div>
                                        <div class="item-quantity">
                                            <span>QTY </span><input type="number" name="quantity" min="1" max="15">
                                        </div>
                                    </div>
                                    <button class="add-to-order-btn">Add to Order</button>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div id="category-beverages" class="category-gap">
                    <p class="category-title">Beverages</p>
                    <div class="item-list">
                        <?php
                        while ($row = mysqli_fetch_assoc($all_beverage_items)) {
                        ?>
                            <div class="item">
                                <div class="item-image">
                                    <img src="images/upload/item/<?php echo $row["IMAGE"] ?>" alt="">
                                </div>
                                <div class="item-details">
                                    <p class="item-name"><?php echo $row["NAME"] ?></p>
                                    <p class="item-description"> <?php echo $row["DESCRIPTION"] ?> </p>
                                    <div class="item-price-and-qt">
                                        <div class="item-price"><?php echo "Rs." . $row["PRICE"] ?></div>
                                        <div class="item-quantity">
                                            <span>QTY </span><input type="number" name="quantity" min="1" max="15">
                                        </div>
                                    </div>
                                    <button class="add-to-order-btn">Add to Order</button>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="Js/script.js"></script>
</body>

</html>