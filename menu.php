<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600&family=Poppins:ital,wght@0,400;0,500;0,700;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
                        <div class="item">
                            <div class="item-image">
                                <img src="images/dishes/dishe1.jpg" alt="">
                            </div>
                            <div class="item-details">
                                <p class="item-name">Apple puddin</p>
                                <p class="item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Eius</p>
                                <div class="item-price-and-qt">
                                    <div class="item-price">Rs.2,900</div>
                                    <div class="item-quantity">
                                        <span>QTY </span><input type="number" name="quantity" min="1" max="15">
                                    </div>
                                </div>
                                <button class="add-to-order-btn">Add to Order</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img src="images/dishes/dishe1.jpg" alt="">
                            </div>
                            <div class="item-details">
                                <p class="item-name">Apple puddin</p>
                                <p class="item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Eius</p>
                                <div class="item-price-and-qt">
                                    <div class="item-price">Rs.2,900</div>
                                    <div class="item-quantity">
                                        <span>QTY </span><input type="number" name="quantity" min="1" max="15">
                                    </div>
                                </div>
                                <button class="add-to-order-btn">Add to Order</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img src="images/dishes/dishe1.jpg" alt="">
                            </div>
                            <div class="item-details">
                                <p class="item-name">Apple puddin</p>
                                <p class="item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Eius</p>
                                <div class="item-price-and-qt">
                                    <div class="item-price">Rs.2,900</div>
                                    <div class="item-quantity">
                                        <span>QTY </span><input type="number" name="quantity" min="1" max="15">
                                    </div>
                                </div>
                                <button class="add-to-order-btn">Add to Order</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img src="images/dishes/dishe1.jpg" alt="">
                            </div>
                            <div class="item-details">
                                <p class="item-name">Apple puddin</p>
                                <p class="item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Eius</p>
                                <div class="item-price-and-qt">
                                    <div class="item-price">Rs.2,900</div>
                                    <div class="item-quantity">
                                        <span>QTY </span><input type="number" name="quantity" min="1" max="15">
                                    </div>
                                </div>
                                <button class="add-to-order-btn">Add to Order</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="catagory-rice" class="category-gap">
                    <p class="category-title">Rice Dishes</p>
                    <div class="item-list">
                        <div class="item">
                            <div class="item-image">
                                <img src="images/dishes/dishe1.jpg" alt="">
                            </div>
                            <div class="item-details">
                                <p class="item-name">Apple puddin</p>
                                <p class="item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Eius</p>
                                <div class="item-price-and-qt">
                                    <div class="item-price">Rs.2,900</div>
                                    <div class="item-quantity">
                                        <span>QTY </span><input type="number" name="quantity" min="1" max="15">
                                    </div>
                                </div>
                                <button class="add-to-order-btn">Add to Order</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img src="images/dishes/dishe1.jpg" alt="">
                            </div>
                            <div class="item-details">
                                <p class="item-name">Apple puddin</p>
                                <p class="item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Eius</p>
                                <div class="item-price-and-qt">
                                    <div class="item-price">Rs.2,900</div>
                                    <div class="item-quantity">
                                        <span>QTY </span><input type="number" name="quantity" min="1" max="15">
                                    </div>
                                </div>
                                <button class="add-to-order-btn">Add to Order</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img src="images/dishes/dishe1.jpg" alt="">
                            </div>
                            <div class="item-details">
                                <p class="item-name">Apple puddin</p>
                                <p class="item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Eius</p>
                                <div class="item-price-and-qt">
                                    <div class="item-price">Rs.2,900</div>
                                    <div class="item-quantity">
                                        <span>QTY </span><input type="number" name="quantity" min="1" max="15">
                                    </div>
                                </div>
                                <button class="add-to-order-btn">Add to Order</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-image">
                                <img src="images/dishes/dishe1.jpg" alt="">
                            </div>
                            <div class="item-details">
                                <p class="item-name">Apple puddin</p>
                                <p class="item-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Eius</p>
                                <div class="item-price-and-qt">
                                    <div class="item-price">Rs.2,900</div>
                                    <div class="item-quantity">
                                        <span>QTY </span><input type="number" name="quantity" min="1" max="15">
                                    </div>
                                </div>
                                <button class="add-to-order-btn">Add to Order</button>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div id="category-burger" class="category-gap">
                    <p class="category-title">Burgers</p>
                    <div class="burger-list">

                    </div>
                </div>
                <div id="category-desserts" class="category-gap">
                    <p class="category-title">Desserts</p>
                    <div class="desserts-list">

                    </div>
                </div>
                <div id="category-beverages" class="category-gap">
                    <p class="category-title">Beverages</p>
                    <div class="desserts-list">

                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="Js/script.js"></script>
</body>

</html>