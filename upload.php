<?php
include 'config.php';
/*
if (isset($_POST['submit'])) {
    extract($_POST); */
    $txtGalleryName=$_POST["child_id"]; 
    $error=array();
    $extension=array("jpeg","jpg","png","gif");
    foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
        $file_name=$_FILES["files"]["name"][$key];
        $file_tmp=$_FILES["files"]["tmp_name"][$key];
        $ext=pathinfo($file_name,PATHINFO_EXTENSION);       //already done in html
    
        if(in_array($ext,$extension)) {
            if(!file_exists("child_pics/".$txtGalleryName."/".$file_name)) {
                move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"child_pics/".$txtGalleryName."/".$file_name);
                echo "uploaded successfully!";
            }
            else{
                echo "already uploaded";    //doesn't work
            }
//header("Location: imgtest.php");
        }

        
        else {
            array_push($error,"$file_name, ");
            echo "invalid";
        }
    }



    ?>








