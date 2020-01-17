<?php
session_start();
include('inc/config.php');

if (!isset($_SESSION['upload_errors'])) {
    $_SESSION['upload_errors'] = array();
}

// connect to the database
$db = mysqli_connect($db_config['DB_HOST'], $db_config['DB_USERNAME'], $db_config['DB_PASSWORD'], $db_config['DB_DATABASE']);

//Initialize variables
$uploadedFiles = array();
$extension = array("jpeg","jpg","png","gif");
$bytes = 1024;
$KB = 3000;
$totalBytes = $bytes * $KB;
$UploadFolder = "uploads/img";
$user_id = $_SESSION['user_id'];
 
$counter = 0;
 
foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name){
    $temp = $_FILES["files"]["tmp_name"][$key];
    $name = $_FILES["files"]["name"][$key];
    $tmpext = explode('.', $name);
    $ext = end($tmpext);
    $save_name = $uniquesavename=time().uniqid(rand()) . "." . $ext;
     
    if(empty($temp))
    {
        break;
    }
     
    $counter++;
    $UploadOk = true;
     
    if($_FILES["files"]["size"][$key] > $totalBytes)
    {
        $UploadOk = false;
        array_push($_SESSION['upload_errors'], $name." dit bestand is groter dan 3 MB.");
    }
     
    $ext = pathinfo($name, PATHINFO_EXTENSION);
    if(in_array($ext, $extension) == false){
        $UploadOk = false;
        array_push($_SESSION['upload_errors'], $name." dit bestandstype wordt niet ondersteund.");
    }
     
    if(file_exists($UploadFolder."/".$name) == true){
        $UploadOk = false;
        array_push($_SESSION['upload_errors'], $name." dit bestand bestaat al.");
    }
     
    if($UploadOk == true){
        move_uploaded_file($temp,$UploadFolder."/".$save_name);
        array_push($uploadedFiles, $name);
        
        //Prepare insert statement
        $query = "INSERT INTO uploads (`user_id`, `filename`, `orig_filename`) VALUES ($user_id, '$save_name', '$name')";
        mysqli_query($db, $query);
    }
}
 
if($counter>0){
    if(count($_SESSION['upload_errors'])>0)
    {
        header('location: portfolio.php');
    }
     
    if(count($uploadedFiles)>0){
        header('location: portfolio.php');
    }                               
}
else{
    echo "Selecteer bestand(en) om toe te voegen.";
}
?>