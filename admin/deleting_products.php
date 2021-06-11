<?php
   

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'engine_db');
    if($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
    }
    

        
        $id = $_POST['product_id'];
       // $product_name = $_POST['product_name'];
       // $product_price = $_POST['product_price'];
        $category = $_POST['category'];
       // $file = $_FILES['product_image'];

        //print_r($file);
        
       // $filename = $file['name'];
       // $filepath = $file['tmp_name'];
       // $fileerror = $file['error'];

       // if($fileerror == 0){
       //     $destfile = 'uploaded_image/'.$filename;
            //echo "$destfile";
       //     move_uploaded_file($filepath,$destfile);
            
            if($category == 'Boys'){
            
                $sql = "DELETE FROM `boys` 
                where `id`= '$id' ";
           
            
            }
            
            elseif($category == 'Men'){
                $sql = "DELETE FROM `men` 
                where `id`= '$id' ";
            }
            elseif($category == 'Women'){
                $sql = "DELETE FROM `women` 
                where `id`= '$id' ";
            }
            
            else{
                $sql = "DELETE FROM `girls` 
                where `id`= '$id' ";
            }
           
           if (mysqli_query($conn, $sql)) {
             echo "Record Deleted Successfully";
           } else {
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
           
      //  }
        mysqli_close($conn);
?>



    




