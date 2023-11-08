<?php
session_start();

$customer_name;

if (!isset($_SESSION['customer_email'])) {
    $customer_name = "Login";
} else {
    $customer_name = $_SESSION['customer_fname'];
}
?>


<header id="navbar">
        <nav>
            <div class="nav-logo">
                <a href="../index.php">Signature Cuisine</a>
            </div>
            <div class="nav-mid-section">

            </div>
            <div class="nav-right-section">
                <ul>
                    <li class="underline"><a href="../index.php">Home</a></li>
                    <li class="underline"><a href="gallery.php">Gallery</a></li>
                    <li class="underline"><a href="menu.php">Menu</a></li>
                    <li class="underline"><a href="../index.php#popular-dishes">Offers</a></li>
                    <li class="underline"><a href="../index.php#facilities">Facilities</a></li>
                    <li class="underline"><a href="#">About Us</a></li>
                </ul>
            </div>
            <div class="login-section">
                <p class="js-log-menu-btn"><?php echo $customer_name ?><span class="material-symbols-outlined">
                        account_circle
                    </span></p>
                <?php 
                    //checking user logged or not
                    if (!isset($_SESSION['customer_email'])) {
                        echo '  <div class="sign-up-menu display-off js-login-menu">
                                    <a href="login.php">Login</a>
                                    <a href="sign-up.php">Sign Up</a>
                                </div>';
                    } else {
                        echo '  <div class="sign-up-menu display-off js-login-menu">
                                    <a href="#">Profile</a>
                                    <a href="#">Log Out</a>
                                 </div>';
                    }
                ?>
                <!-- <div class="sign-up-menu display-off js-login-menu">
                    <p>Log In</p>
                    <p>Sign Up</p>
                </div> -->
                <span class="material-symbols-outlined nav-menu-icon js-nav-toggle">
                    menu
                </span>
            </div>
            <div class="mobile-nav-section display-off js-mobile-nav">
                <ul>
                    <li class="underline"><a href="../index.php">Home</a></li>
                    <li class="underline"><a href="gallery.html">Gallery</a></li>
                    <li class="underline"><a href="menu.php">Menu</a></li>
                    <li class="underline"><a href="#popular-dishes">Offers</a></li>
                    <li class="underline"><a href="#facilities">Facilities</a></li>
                    <li class="underline"><a href="#">About Us</a></li>
                </ul>
            </div>
        </nav>
    </header>