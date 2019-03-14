<?php

//Image Uploading Activity
        require_once './ImgUpload.php';

        //Generating product id randomly
        $prodcut_id= 'P'.rand(11111, 99999);
        //for thumbnails pic
        for($i=1;$i<=4;$i++){
            $target_path="../img/product/".$prodcut_id."_img".$i.".jpg";
            $img='ImgUpload'.$i;
            new $img($target_path,277,261,100);
        }
        //File location to store in database
        $target_path1="img/product/".$prodcut_id."_img1.jpg";
        $target_path2="img/product/".$prodcut_id."_img2.jpg";
        $target_path3="img/product/".$prodcut_id."_img3.jpg";
        $target_path4="img/product/".$prodcut_id."_img4.jpg";

//Database Activity
        require_once './db.php';

        $proObj=new db();

        //URL Value initializing in variable
            $productTitle= filter_input(INPUT_POST, 'productTitle');
            $description= filter_input(INPUT_POST, 'productDesc');
            $costPrice= filter_input(INPUT_POST, 'productCostPrice');
            $sellingPrice= filter_input(INPUT_POST, 'productSellingPrice');
            
        //Creating and Executing SQL Query    
            $product = "INSERT INTO product(product_id,product_title,description,cost_price,selling_price,img_path1,"
                    . "img_path2,img_path3,img_path4) VALUES ('$prodcut_id','$productTitle','$description','$costPrice',"
                    . "'$sellingPrice','$target_path1','$target_path2','$target_path3','$target_path4')";
            
            $query = $proObj->execute($product);

        //Reporting Messgage
        $message="$prodcut_id Product Added Successfully";
        echo "<SCRIPT type='text/javascript'>
        alert('$message');
        window.location.replace(\"../addProduct.php\");</SCRIPT>";
