<?php
$category1 = $_POST['category'];
$product_id = $_POST['product_id'];

//connection to db
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "engine_db");

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

if ($category1 == 'Men') {
    $get = mysqli_query($link, "SELECT * FROM  men where id=$product_id");
} elseif ($category1 == 'Women') {
    $get = mysqli_query($link, "SELECT * FROM  women where id=$product_id ");
} elseif ($category1 == 'Boys') {
    $get = mysqli_query($link, "SELECT * FROM  boys where id=$product_id");
} else {
    $get = mysqli_query($link, "SELECT * FROM  girls where id=$product_id");
}
$row = mysqli_fetch_array($get);
//echo "$row";
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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="products.php"><i class="fa fa-fw fa-bar-chart-o"></i>View Products</a>
                    </li>
                    <li>
                        <a href="add_product.php"><i class="fa fa-fw fa-table"></i>Add Product</a>
                    </li>

                    <li>
                        <a href="update_products.php"><i class="fa fa-fw fa-desktop"></i>Update Products</a>
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
                <div class="col-md-12">
                    <div class="row">
                        <div style="padding: 10px 0 10px 40% ; background-color : #f1f1f1;margin-bottom:10px">
                            <h1 class="page-header">
                                Update Product
                            </h1>
                        </div>
                    </div>

                    <form action="updated_succes.php" method="POST" enctype="multipart/form-data">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="product_id">Product ID:</label>
                                <input type="text" name="id" class="form-control" required value=<?php echo htmlentities($row['id']); ?>>
                            </div>

                            <div class="dropdown">
                                <label for="select_1">Select Category</label>
                                <select class="form-control" id="select_1" name="category" required>
                                    <option value="Current Category"><?php echo "$category1" ?></option>
                                    <option value="Men">Men</option>
                                    <option value="Women">Women</option>
                                    <option value="Boys">Boys</option>
                                    <option value="Girls">Girls</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="product-name">Product Name </label>
                                <input type="text" name="product_name" class="form-control" required value=<?php echo htmlentities($row['product_name']); ?>>
                            </div>

                            <div class="form-group">
                                <label for="product-price">Product Price </label>
                                <input type="text" name="product_price" class="form-control" required value=<?php echo htmlentities($row['product_price']);   ?>>

                            </div>
                            <div class="bbb">
                                <div class="form-group">
                                    <label for="product-image">Product Image</label>
                                    <input type="file" name="product_image" style="color:transparent;" required>
                                    <p><?php echo htmlentities($row['product_image']); ?></p>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="Add" class="btn btn-primary btn-lg" value="Update Item">
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
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