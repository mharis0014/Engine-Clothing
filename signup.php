<?php
$email = $_POST['email'];
$name = $_POST['username'];
$tel = $_POST['tel'];
$pass = $_POST['password'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'engine_db');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO `registration` (`email`, `name`, `tel`, `password`) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $email, $name, $tel, $pass);
    $stmt->execute();
    echo "Registration Successful....";
    $stmt->close();
    $conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="resources/css/form.css" />
    <script src="resources/js/form.js"></script>
    <script src="https://kit.fontawesome.com/86952377b1.js" crossorigin="anonymous"></script>
</head>

<body>
    <form class="login-form form2" action="signup.php" method="POST" onsubmit="return signup();">
        <div class="logo-img">
            <img src="resources/img/logo.png" height="50px" alt="Engine Clothing Logo" />
        </div>

        <div id="err_msg"></div>

        <div class="txtb">
            <input type="email" id="email" name="email" required />
            <span data-placeholder="Email"></span>
        </div>

        <div class="txtb">
            <input type="text" id="name" name="username" min="4" required />
            <span data-placeholder="Username"></span>
        </div>

        <div class="txtb">
            <input type="tel" id="tel" name="tel" required />
            <span data-placeholder="Phone No"></span>
        </div>

        <div class="txtb">
            <input type="password" id="password" name="password" required />
            <span data-placeholder="Password"></span>
        </div>
        <p class="small" id="small"></p>

        <input type="submit" class="logbtn" id="logbtn" value="Sign up" />

        <div class="bottom-text">
            <p id="bottom_txt">
                Already have an account? <a href="login.php">Login</a>
            </p>
        </div>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".txtb input").on("focus", function() {
                $(this).addClass("focus");
            });
            $(".txtb input").on("blur", function() {
                if ($(this).val() == "") $(this).removeClass("focus");
            });
        });
    </script>
</body>

</html>