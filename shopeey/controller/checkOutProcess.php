<?php

//Database Activity
        require_once './db.php';

        $proObj=new db();

        //URL Value initializing in variable
            $customerName= filter_input(INPUT_POST, 'customerName');
            $shippingAddress= filter_input(INPUT_POST, 'shippingAddress');
            $paymentMethod= filter_input(INPUT_POST, 'paymentMethod');
            $prodcut_id= filter_input(INPUT_POST, 'product_id');
            $order_id='ORD'.rand(111111, 999999);
            
        //Creating and Executing SQL Query    
            $order = "INSERT INTO order_table(order_id,customer_name,shipping_address,payment_method,product_id) "
                    . "VALUES ('$order_id','$customerName','$shippingAddress','$paymentMethod','$prodcut_id')";
            
            $query = $proObj->execute($order);

        //Reporting Messgage
        $message="Your Order is Placed Successfully & Your Order ID is : $order_id";
        echo "<SCRIPT type='text/javascript'>
        alert('$message');
        window.location.replace(\"../shopping.php\");</SCRIPT>";
