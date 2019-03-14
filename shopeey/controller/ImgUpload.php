<?php
 require_once 'ImageEdit.php';
 
 class ImgUpload1{
     public function __construct($target_path,$w,$h,$quality=100) {         
      if(isset($_FILES['upload_img1'])){
          
              $errors= array();
              $file_name= $_FILES['upload_img1']['name'];
              $file_size= $_FILES['upload_img1']['size'];
              $file_tmp= $_FILES['upload_img1']['tmp_name'];
              $file_type= $_FILES['upload_img1']['type'];
              
              $tmp= explode('.', $file_name);
              $file_extension= strtolower(end($tmp));

              $extensions= array("jpeg","jpg","png");
              //checking extension
              if(in_array($file_extension, $extensions)===FALSE){
                  $errors[]="Extensions are not allowed, Please choose a JPEG or PNG format file";
              }
              //checking file size
              if($file_size> 2097152){
                  $errors[]="File size must be less than 2 MB";
              }
              //checking any error occured or not
              if(empty($errors)==true){
                 $obj = new ImageEdit(); 
                 $img = $obj->imageResize($file_tmp,$w,$h);
                 imagejpeg($img, $target_path, $quality);
                 //move_uploaded_file($file_tmp,$target_path);
              }else{
                 print_r($errors);
              }
        }
    }
 }
 class ImgUpload2{
     public function __construct($target_path,$w,$h,$quality=100) {         
      if(isset($_FILES['upload_img2'])){
          
              $errors= array();
              $file_name= $_FILES['upload_img2']['name'];
              $file_size= $_FILES['upload_img2']['size'];
              $file_tmp= $_FILES['upload_img2']['tmp_name'];
              $file_type= $_FILES['upload_img2']['type'];
              
              $tmp= explode('.', $file_name);
              $file_extension= strtolower(end($tmp));

              $extensions= array("jpeg","jpg","png");
              //checking extension
              if(in_array($file_extension, $extensions)===FALSE){
                  $errors[]="Extensions are not allowed, Please choose a JPEG or PNG format file";
              }
              //checking file size
              if($file_size> 2097152){
                  $errors[]="File size must be less than 2 MB";
              }
              //checking any error occured or not
              if(empty($errors)==true){
                 $obj = new ImageEdit(); 
                 $img = $obj->imageResize($file_tmp,$w,$h);
                 imagejpeg($img, $target_path, $quality);
                 //move_uploaded_file($file_tmp,$target_path);
              }else{
                 print_r($errors);
              }
        }
    }
 }
 class ImgUpload3{
     public function __construct($target_path,$w,$h,$quality=100) {         
      if(isset($_FILES['upload_img3'])){
          
              $errors= array();
              $file_name= $_FILES['upload_img3']['name'];
              $file_size= $_FILES['upload_img3']['size'];
              $file_tmp= $_FILES['upload_img3']['tmp_name'];
              $file_type= $_FILES['upload_img3']['type'];
              
              $tmp= explode('.', $file_name);
              $file_extension= strtolower(end($tmp));

              $extensions= array("jpeg","jpg","png");
              //checking extension
              if(in_array($file_extension, $extensions)===FALSE){
                  $errors[]="Extensions are not allowed, Please choose a JPEG or PNG format file";
              }
              //checking file size
              if($file_size> 2097152){
                  $errors[]="File size must be less than 2 MB";
              }
              //checking any error occured or not
              if(empty($errors)==true){
                 $obj = new ImageEdit(); 
                 $img = $obj->imageResize($file_tmp,$w,$h);
                 imagejpeg($img, $target_path, $quality);
                 //move_uploaded_file($file_tmp,$target_path);
              }else{
                 print_r($errors);
              }
        }
    }
 }
 class ImgUpload4{
     public function __construct($target_path,$w,$h,$quality=100) {         
      if(isset($_FILES['upload_img4'])){
          
              $errors= array();
              $file_name= $_FILES['upload_img4']['name'];
              $file_size= $_FILES['upload_img4']['size'];
              $file_tmp= $_FILES['upload_img4']['tmp_name'];
              $file_type= $_FILES['upload_img4']['type'];
              
              $tmp= explode('.', $file_name);
              $file_extension= strtolower(end($tmp));

              $extensions= array("jpeg","jpg","png");
              //checking extension
              if(in_array($file_extension, $extensions)===FALSE){
                  $errors[]="Extensions are not allowed, Please choose a JPEG or PNG format file";
              }
              //checking file size
              if($file_size> 2097152){
                  $errors[]="File size must be less than 2 MB";
              }
              //checking any error occured or not
              if(empty($errors)==true){
                 $obj = new ImageEdit(); 
                 $img = $obj->imageResize($file_tmp,$w,$h);
                 imagejpeg($img, $target_path, $quality);
                 //move_uploaded_file($file_tmp,$target_path);
              }else{
                 print_r($errors);
              }
        }
    }
 }