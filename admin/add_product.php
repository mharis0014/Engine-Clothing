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



        <div style="  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url(../resources/Images/women.png);
  background-size: cover;
  color: #fff;
  background-attachment: fixed;" id="page-wrapper">

            <div class="container-fluid">






                <div class="col-md-12">

                    <div class="row">
                        <div style="margin-bottom:50px">
                            <h1 class="page-header">
                                Add Product
                            </h1>
                        </div>
                    </div>



                    <form action="adding_product.php" method="POST" enctype="multipart/form-data">


                        <div class="col-md-8">

                            <div class="form-group">
                                <label for="product-name">Product Name </label>
                                <input style="width:40%;" type="text" name="product_name" class="form-control" required>

                            </div>



                            <div class="form-group">
                                <label for="product-price">Product Price </label>
                                <input style="width:40%;" type="text" name="product_price" class="form-control" required>

                            </div>


                            <div class="bbb">
                                <div class="dropdown">
                                    <label for="select_1">Select Category</label>
                                    <select style="width:40%; margin-bottom:50px" class="form-control" id="select_1" name="category" required>
                                        <option value="Men">Men</option>
                                        <option value="Women">Women</option>
                                        <option value="Boys">Boys</option>
                                        <option value="Girls">Girls</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="product-image">Product Image</label>
                                    <input style="width:40%; margin-bottom: 50px;" type="file" name="product_image" required>
                                </div>



                                <div class="form-group">
                                    <input type="submit" name="Add" class="btn btn-primary btn-lg" value="Add Item">
                                </div>
                            </div>




                        </div>







                </div>
                <!--Main Content-->






                </form>







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