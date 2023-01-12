<?php
include_once '../Database/env.php';
session_start();
$errors=[];
if(isset($_POST['submit'])){
  //assignent variable
    $request=$_POST;
 
    $category=$request['category'];
   
  
    //validation
    if(empty($category)){
      $errors['category']="Insert Your category" ; 
    }
   
    
      if(count($errors)>0){
        $_SESSION['error']=$errors;
        header("location:../backend/Add_categories.php");
      }else{

        //img_proccessing
       
       $query="INSERT INTO categories( category) VALUES ('$category')" ;
         $result=mysqli_query($con,$query);
         if($result){
          $msg="Data Insert Successfully";
          $_SESSION['error'] = $msg;
          header("location:../backend/Add_categories.php");
      
        }
    
      }
    }