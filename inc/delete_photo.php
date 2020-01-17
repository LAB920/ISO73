<!-- Include header -->
<?php
    session_start();
    include('config.php');

    // Get params from Ajax
    $photo_id = json_decode($_POST['photoid'], true);
    $user = json_decode($_POST['userid'],true);

    // connect to the database
    $db = mysqli_connect($db_config['DB_HOST'], $db_config['DB_USERNAME'], $db_config['DB_PASSWORD'], $db_config['DB_DATABASE']);
    
    //Prepare insert statement
    $query = "DELETE FROM uploads WHERE `user_id` = $user AND `filename` = '" . $photo_id . "'";
    mysqli_query($db, $query);
    
    // Delete image
    $filepath = '../uploads/img/' . $photo_id;
    unlink($filepath);
?>

