 <?php

  $link = mysqli_connect("localhost", "root", "");
  mysqli_select_db($link, "engine_db");

  if (isset($_POST['username'])) {
    $uname = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($link, "select * from registration where name='" . $uname . "' AND password='" . $password . "' limit 1");
    $admin = mysqli_query($link, "select * from admin where username='" . $uname . "' AND pass='" . $password . "' limit 1");

    if (mysqli_num_rows($result)) {
      session_start();
      $_SESSION = array();
      $_SESSION = $uname;
      //echo "$_SESSION";
      header('Location: http://localhost/Engine%20Clothing/index.php');
      exit();
    } elseif (mysqli_num_rows($admin)) {
      session_start();
      $_SESSION = array();
      $_SESSION = $uname;
      //echo "$_SESSION";
      header('Location: http://localhost/Engine%20Clothing/admin/admin.php');
      exit();
    } else {
      echo " You have entered incorrect password";
      exit();
    }
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
 </head>

 <body>
   <form class="login-form form1" method="POST" action="#" onsubmit="return login();">
     <div class="logo-img">
       <img src="resources/img/logo.png" height="50px" alt="Engine Clothing Logo" />
     </div>

     <div id="err_msg"></div>

     <div class="txtb">
       <input type="text" name="username" id="name" min="4" required />
       <span data-placeholder="Username"></span>
     </div>

     <div class="txtb">
       <input type="password" name="password" id="password" required />
       <span data-placeholder="Password"></span>
     </div>
     <p class="small" id="small"></p>

     <input type="submit" class="logbtn" id="logbtn" value="Login" />

     <div class="bottom-text">
       <p id="bottom_txt">Don't have an account? <a href="signup.php">Signup</a></p>
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