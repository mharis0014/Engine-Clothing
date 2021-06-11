<?php

//connection to db
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "engine_db");

// Check connection
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
              <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Ammar Ahmed <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="admin.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="products.php"><i class="fa fa-fw fa-bar-chart-o"></i> View Products</a>
                    </li>
                    <li>
                        <a href="add_product.php"><i class="fa fa-fw fa-table"></i> Add Product</a>
                    </li>
                    
                    <li>
                        <a href="update_products.php"><i class="fa fa-fw fa-desktop"></i> Update Product</a>
                    </li>
                    <li>
                        <a href="delete.php"><i class="fa fa-fw fa-wrench"></i>Delete Product</a>
                    </li>
                
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

             <div class="row">
<div style="white; padding: 10px 0 10px 40% ; background-color : #f1f1f1">
<h1 class="page-header">
   All Products
</h1>
    </div>
        <div style="background-color: #888; color : white; padding: 10px 0 10px 45% ; margin-bottom: 30px" >
        <h2>Boys</h2></div>
    <?php
    $get = mysqli_query($link, "SELECT * FROM  boys ");
    while ($row = mysqli_fetch_array($get)) {
    ?>


<table class="table table-hover">
    <thead>
        
      <tr>
           <th>Id</th>
           <th>Title</th>
           <th>Price</th>
           <th>Photo</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <td> <?php echo htmlentities($row['id']);   ?></td>
        <td> <?php echo htmlentities($row['product_name']);   ?><br>
        <td> <?php echo htmlentities($row['product_price']);   ?><br></td>
        <td><img height="100" width="100" src="<?php echo htmlentities($row['product_image']); ?>"></td>
    </tr>
  </tbody>
</table>

<?php  } ?>

<div style="background-color: #888; color : white; padding: 10px 0 10px 45% ; margin-bottom: 50px; margin-top: 50px; " >
<h2>Men</h2></div>

<?php
    $get = mysqli_query($link, "SELECT * FROM  men ");
    while ($row = mysqli_fetch_array($get)) {
    ?>


<table class="table table-hover">
    <thead>
      <tr>
           <th>Id</th>
           <th>Title</th>
           <th>Price</th>
           <th>Photo</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <td> <?php echo htmlentities($row['id']);   ?></td>
        <td> <?php echo htmlentities($row['product_name']);   ?><br>
        <td> <?php echo htmlentities($row['product_price']);   ?><br></td>
        <td><img height="100" width="100" src="<?php echo htmlentities($row['product_image']); ?>"></td>
    </tr>
  </tbody>
</table>

<?php  } ?>

<div style="background-color: #888; color : white; padding: 10px 0 10px 45% ; margin-bottom: 50px; margin-top: 50px; " >
<h2>Women</h2></div>

<?php
    $get = mysqli_query($link, "SELECT * FROM  women ");
    while ($row = mysqli_fetch_array($get)) {
    ?>


<table class="table table-hover">
    <thead>
      <tr>
           <th>Id</th>
           <th>Title</th>
           <th>Price</th>
           <th>Photo</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <td> <?php echo htmlentities($row['id']);   ?></td>
        <td> <?php echo htmlentities($row['product_name']);   ?><br>
        <td> <?php echo htmlentities($row['product_price']);   ?><br></td>
        <td><img height="100" width="100" src="<?php echo htmlentities($row['product_image']); ?>"></td>
    </tr>
  </tbody>
</table>

<?php  } ?>

<div style="background-color: #888; color : white; padding: 10px 0 10px 45% ; margin-bottom: 50px; margin-top: 50px; " >
<h2>Girls</h2></div>

<?php
    $get = mysqli_query($link, "SELECT * FROM  girls ");
    while ($row = mysqli_fetch_array($get)) {
    ?>


<table class="table table-hover">
    <thead>
      <tr>
           <th>Id</th>
           <th>Title</th>
           <th>Price</th>
           <th>Photo</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <td> <?php echo htmlentities($row['id']);   ?></td>
        <td> <?php echo htmlentities($row['product_name']);   ?><br>
        <td> <?php echo htmlentities($row['product_price']);   ?><br></td>
        <td><img height="100" width="100" src="<?php echo htmlentities($row['product_image']); ?>"></td>
    </tr>
  </tbody>
</table>

<?php  } ?>










                
                 


             </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->







    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
