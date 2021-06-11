<?php include 'header.php'; ?>

<title>Cart | Engine Clothing</title>
</head>

<body>
    <nav class="sticky">
        <div class="row">
            <img src="resources/img/logo-white.png" alt="Omnifood logo" class="logo" />
            <img src="resources/img/logo.png" alt="Omnifood logo" class="logo-black" />
            <ul class="main-nav js--main-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="men.php">Men</a></li>
                <li><a href="women.php">Women</a></li>
                <li><a href="boys.php">Boys</a></li>
                <li><a style="color: #e67e22; font-weight: 400;" href="sale.php">Sale</a></li>
                <li><a href="girls.php">Girls</a></li>
                <li>
                    <a style="margin-right: 130px;" href="sizeChart.php">Size Chart</a>
                </li>
                <li>
                    <a href="login.php"><img src="resources/img/user1.svg" class="nav-icons" height="30" alt="User profile" />
                        <img src="resources/img/supervisor_account-black-18dp.svg" class="bnav" height="28" alt="User profile" /></a>
                </li>
                <li>
                    <a href="#"><img src="resources/img/shopping_cart.svg" class="nav-icons" height="26" alt="Cart" />
                        <img src="resources/img/shopping_cart-black.svg" class="bnav" height="25" alt="Cart" /></a>
                </li>
            </ul>
            <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
        </div>
    </nav>

    <section class="container content-section">
        <h2 style="margin-top: 40px;" class="section-header">CART</h2>
        <div class="cart-row">
            <span class="cart-item cart-header cart-coloumn">ITEM</span>
            <span class="cart-price cart-header cart-coloumn">PRICE</span>
            <span class="cart-quantity cart-header cart-coloumn">QUANTITY</span>
        </div>
        <div class="cart-items" id="allcart"></div>
        </div>
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <span class="cart-total-price">$0</span>
        </div>
        <div style="text-align: center;">
            <a class="btn btn-ghost btn-purchase" href="#">PURCHASE</a>
        </div>
    </section>
    <script src="resources/js/tray.js" async></script>
    <script>
        var cart = document.getElementById("allcart");
        var data = JSON.parse(getCookie('cart'))
        var html = '';
        data.forEach((item) => {

            var cartRowContents = `
<div class="cart-row">
    <div class="cart-item cart-coloumn">
      <img
        class="cart-item-image"
        src="${item.imageSrc}"
        width="100"
        height="100"
      />
      <span class="cart-item-title">${item.title}</span>
    </div>
    <span class="cart-price cart-coloumn">${item.price}</span>
    <div class="cart-quantity cart-coloumn">
      <input class="cart-quantity-input" type="number" value="1" />
      <a class="btn btn-full btn-store btn-remove" href="#">REMOVE</a>
    </div>
</div>
`;
            html += cartRowContents;


        });
        cart.innerHTML = html;

        function getCookie(c_name) {
            if (document.cookie.length > 0) {
                c_start = document.cookie.indexOf(c_name + "=");
                if (c_start != -1) {
                    c_start = c_start + c_name.length + 1;
                    c_end = document.cookie.indexOf(";", c_start);
                    if (c_end == -1) {
                        c_end = document.cookie.length;
                    }
                    return unescape(document.cookie.substring(c_start, c_end));
                }
            }
            return "";
        }
    </script>


    <?php include 'footer.php'; ?>