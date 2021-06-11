<?php include 'header.php'; ?>

<title>Boys | Engine Clothing</title>
</head>

<body>
    <header class="header-boys">
        <nav>
            <div class="row">
                <img src="resources/img/logo-white.png" alt="Omnifood logo" class="logo" />
                <img src="resources/img/logo.png" alt="Omnifood logo" class="logo-black" />
                <ul class="main-nav js--main-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="men.php">Men</a></li>
                    <li><a href="women.php">Women</a></li>
                    <li><a href="#">Boys</a></li>
                    <li><a href="girls.php">Girls</a></li>
                    <li><a style="color: #e67e22; font-weight: 400;" href="sale.php">Sale</a></li>
                    <li><a href="sizeChart.php">Size Cart</a></li>
                    <li>
                        <a href="login.php"><img src="resources/img/user1.svg" class="nav-icons" height="30" alt="User profile" />
                            <img src="resources/img/supervisor_account-black-18dp.svg" class="bnav" height="28" alt="User profile" /></a>
                    </li>
                    <li>
                        <a href="cart.php"><i class="fas fa-shopping-cart js-icon"><span class="badge">0</span></i>
                            <img src="resources/img/shopping_cart-black.svg" class="bnav" height="25" alt="Cart" /></a>
                    </li>
                </ul>
                <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
            </div>
        </nav>
        <div class="hero-text-box">
            <h1 class="aa">Engine Clothing</h1>
            <a class="btn btn-full js--scroll-to-plans" href="#topwear">New TopWear</a>
            <a class="btn btn-ghost js--scroll-to-start" href="#footwear">Footwear</a>
        </div>
    </header>

    <section class="sec-cont" id="topwear">
        <h2>BOYS</h2>
        <div class="shop-items">

            <?php
            $get = mysqli_query($link, "SELECT * FROM  boys ");
            while ($row = mysqli_fetch_array($get)) {
            ?>

                <!-- one product item -->
                <div class="shop-item">
                    <span style="font-size: 0.9em;" class="shop-item-title"> <?php echo htmlentities($row['product_name']);   ?></span>
                    <img class="shop-item-image" src="<?php echo htmlentities($row['product_image']); ?> ">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$<?php echo htmlentities($row['product_price']);  ?></span>
                        <a class="btn btn-full btn-store js--add-to-cart-btn atcb" name="cart-btn" href="#">ADD TO CART</a>
                    </div>
                </div>

            <?php  } ?>

        </div>
        <script type="application/javascript" src="resources/js/cart.js"></script>
    </section>

    <?php include 'footer.php'; ?>