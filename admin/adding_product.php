<?php
   

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'engine_db');
    if($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
    }
    echo "Connected successfully";
        
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $category = $_POST['category'];
        $file = $_FILES['product_image'];

        //print_r($file);
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];

        if($fileerror == 0){
            $destfile = 'uploaded_image/'.$filename;
            //echo "$destfile";
            move_uploaded_file($filepath,$destfile);

            if($category == 'Boys'){
            $sql = "INSERT INTO boys (product_name, product_price, product_image)
            VALUES ('$product_name', '$product_price', '$destfile')";
            }
            elseif($category == 'Men'){
              $sql = "INSERT INTO men (product_name, product_price, product_image)
              VALUES ('$product_name', '$product_price', '$destfile')";
            }
            elseif($category == 'Women'){
              $sql = "INSERT INTO women (product_name, product_price, product_image)
            VALUES ('$product_name', '$product_price', '$destfile')";
            }
            
            else{
              $sql = "INSERT INTO girls (product_name, product_price, product_image)
            VALUES ('$product_name', '$product_price', '$destfile')";
            }
           
           if (mysqli_query($conn, $sql)) {
             echo "New record created successfully";
           } else {
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
           
        }
?>




//mysqli_close($conn);

    




