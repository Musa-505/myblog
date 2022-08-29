<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog MS --- login</title>
    <link rel="icon" href="../images/icon.jpg">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Bl<span>og</span></a></div>
            <ul class="menu">
                <li><a href="../index.php#home" class="menu-btn">Home</a></li>
                <li><a href="./login.php#login" class="menu-btn">Login</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- login section start -->
    <section class="login" id="login">
        <div class="max-width">
            <div class="login-content">
                <div class="text">Login</div>
                    <form action="../http/login-s.php" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required name="login" class="login-s">
                            </div>
                            <div class="field email">
                                <input type="password" placeholder="Email" required name="password" class="password">
                            </div>
                        </div>
                        <div class="button-area">
                            <button type="submit" name="submit">Log in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="https://instagram.com/">MS+</a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </footer>
    <script src="../js/script.js"></script>
</body>
</html>
