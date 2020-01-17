<!-- Include header -->
<?php
    session_start();
    
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    }

    $title = 'Portfolio';
    include('inc/header.php');

    // connect to the database
    $db = mysqli_connect($db_config['DB_HOST'], $db_config['DB_USERNAME'], $db_config['DB_PASSWORD'], $db_config['DB_DATABASE']);
?>

    <!-- Only show 'my pictures' for logged in users -->
    <?php if (isset($_SESSION['username'])) : ?>
        <h3>Mijn foto's</h3>
        <div class="portfolio mijn-fotos">
            <?php
                $uploaded_files = array();
                $my_images = array();

                $query = "SELECT * FROM uploads WHERE user_id = $user_id";
                $result = mysqli_query($db, $query);

                if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            array_push($uploaded_files, $row['filename']);
                        }

                        $dir = "uploads/img";

                        foreach($uploaded_files as $file) {
                            foreach (glob("$dir/$file") as $filename) {
                                array_push($my_images, $filename);
                             }
                        }
                        
                        foreach($my_images as $image) {
            ?>
                            <div class="mijn-foto-container">
                                <img src="<?= $image ?>">
                                <div class="overlay">
                                    <a href="" class="icon verwijder-mijn-foto" title="Verwijder" data-id="<?= substr($image, 12) ?>" data-user="<?= $user_id ?>">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </div>
                            </div>
            <?php
                        }
                }
            ?>
        </div>
    <?php endif ?>

    <!-- Global portfolio -->
        <div class="portfolio">
            <p></p><h2>Portfolio</h2></p>
            <?php
                $dir = "uploads/img";
                $images = glob("$dir/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
                
                foreach($images as $image) {
                    echo "<img src=\"$image\">";
                }
            ?>
        </div>

    <!-- only show upload form for logged in users -->
    <?php if (isset($_SESSION['username'])) : ?>
        <?php if(isset($_SESSION['upload_errors'])) : ?>
            <!-- Show errors -->
            <?php  if (count($_SESSION['upload_errors']) > 0) : ?>
                <div class="error">
                    <?php foreach ($_SESSION['upload_errors'] as $error) : ?>
                    <p><?php echo $error ?></p>
                    <?php endforeach ?>
                </div>
            <?php  endif ?>
        <?php  endif ?>

        <?php unset($_SESSION['upload_errors']) ?>

        <!-- Upload form -->
        <form method="post" action="upload_portfolio.php" enctype="multipart/form-data" name="formUploadFile">      
            <label>Selecteer afbeelding(en) om toe te voegen:</label>
            <input type="file" name="files[]" multiple="multiple" />
            <input type="submit" value="Upload" name="btnSubmit"/>
        </form>
    <?php endif ?>

<!-- Include footer -->
<?php include('inc/footer.php'); ?>