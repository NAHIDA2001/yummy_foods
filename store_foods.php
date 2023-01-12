<?php
session_start();
$errors=[];
include_once '../Database/env.php';
if(isset($_POST['submit'])){
    //variable assigment
    $request=$_POST;

    $title=$request['title'];
    $detail=$request['detail'];
    $price=$request['price'];
    $food_img=$_FILES['food_img'];
    $category_id=$request['category_id'];
    $extension = pathinfo($food_img['name'])['extension']; 
    $accepted_extension = ['jpg','png','jpeg','webp','svg'];
    
//validation
    if(empty($title)){
        $errors['title']="Insert Your Contain" ; 
      }
     
      if(empty($detail)){
          $errors['detail']="Insert Your  Detail" ; 
        }
        if(empty($price)){
          $errors['price']="Insert price" ; 
        }
        if(empty($category_id)){
          $errors['category_id']="Select one category !";
        }
        if($food_img['size']==0){
          $errors['food_img']="Insert food_img" ; 
        }elseif(!in_array($extension,$accepted_extension)){
          $errors['food_img']=" Please Insert proper  iamge formate" ;
        }
        if(count($errors)>0){
          $_SESSION['error']=$errors;
          header("location:../backend/Add_food.php");
       
        }else{
  
          //img_proccessing
          $new_img_name = 'food-'. uniqid(). '.' .$extension;
          move_uploaded_file($food_img['tmp_name'],"../upload/foods/$new_img_name" );
          //query excicute part
          $query="INSERT INTO  foods_item( title, detail, price, food_img, category_id) 
          VALUES ('$title','$detail','$price','$new_img_name','$category_id')";
          $result = mysqli_query($con,$query);
           if($result){
            $msg="Data Insert Successfully";
            $_SESSION['errors'] = $msg;
            header("location:../backend/Add_food.php");
          
        
          }
      
        }
      }
    
