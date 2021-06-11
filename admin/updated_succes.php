<?php
   

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'engine_db');
    if($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
    }
    

        
        $id = $_POST['id'];
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
            
                $sql = "UPDATE `boys` SET 
                `product_name` = '$product_name', 
                `product_price` = '$product_price', 
                `product_image` = '$destfile' 
                 where `id`= '$id' ";
           
            
            }
            
            elseif($category == 'Men'){
                $sql = "UPDATE `men` SET 
                `product_name` = '$product_name', 
                `product_price` = '$product_price', 
                `product_image` = '$destfile' 
                 where `id`= '$id' ";
            }
            elseif($category == 'Women'){
                $sql = "UPDATE `women` SET 
                `product_name` = '$product_name', 
                `product_price` = '$product_price', 
                `product_image` = '$destfile' 
                 where `id`= '$id' ";
            }
            
            else{
                $sql = "UPDATE `girls` SET 
                `product_name` = '$product_name', 
                `product_price` = '$product_price', 
                `product_image` = '$destfile' 
                 where `id`= '$id' ";
            }
           
           if (mysqli_query($conn, $sql)) {
             echo "Record Updated Successfully";
           } else {
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
           
        }
        mysqli_close($conn);
?>



    




