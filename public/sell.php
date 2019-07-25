<?php
   
    require("../models/config.php");
    if(empty($_SESSION['id'])){
        redirect('login.php');
    }
    else if($_SERVER["REQUEST_METHOD"]=="GET" && !empty($_SESSION['id'])){
        render("sell_form.php",["title"=>"PostAd"]);
    }
    else if($_SERVER["REQUEST_METHOD"]=="POST"){
        $conn = dbconnect();
        if($conn->connect_error){
            die("CONNECTION FAILED".$conn->conncet_error);
        }
        else{
            //Get college
            $query ="SELECT * FROM users WHERE id='".$_SESSION['id']."'";
            $results = $conn ->query($query);
            $row = $results->fetch_assoc();
            $place=$row['place'];
            
            //mysql check
            $category = mysqli_real_escape_string($conn, $_POST['category']);
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $description = mysqli_real_escape_string($conn, $_POST['description']);
            $contact = mysqli_real_escape_string($conn, $_POST['contact']);
            $place = mysqli_real_escape_string($conn, $_POST['place']);
            $time = mysqli_real_escape_string($conn, $_POST['time']);
            $image = mysqli_real_escape_string($conn, $_POST['image']);
            $file_name = "uploads/asd1283.jpg";
            //donation
            /* if(strpos($donate,"donate")!==FALSE ||empty($price)){
                $price = "On donation";
            }
             */
            //for image
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            echo $target_file;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            
            if (is_uploaded_file($_FILES['image']['tmp_name'])) {
                // Check if file already exists
                
                if (file_exists($target_file)) {
                    apologize("File already exists.");
                }
                // Check file size
                else if ($_FILES["image"]["size"] > 1000000) {
                    apologize("File is too large.");
                }
                // Check file extension
            
                else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" &&
                    $imageFileType != "gif" ) {
                    apologize("Only JPG, JPEG, PNG & GIF files are allowed.");
                }
                // Upload file to server
                else {
                    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                     apologize("There was an error uploading your file.");
                    }
                }
            }
            else {
            $target_file="uploads/asd1283.jpg";
            }
            
            //query
            $query="INSERT INTO items(user_id,title,time,place,category,date,contact,description,image) VALUES(".$_SESSION['id'].",'".$title."','".$time."','".$place."','".$category."','".date("Y-m-d")."','".$contact."','".$description."','".$target_file."')";
            $conn->query($query);
            redirect("portofolio.php");
        }
    }



?>