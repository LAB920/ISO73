<!-- Include header -->
<?php
    session_start();

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: index.php");
    }

    $title = 'Home';
    include('inc/header.php');
?>
    <div class="portfolio">
        <?php
            $dir = "uploads/img";
            $images = glob("$dir/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
            
            foreach($images as $image)
            {
            echo "<img src=\"$image\">";
            }
        ?>
    </div>

    <!-- only show for logged in users -->
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
            <label>Selecteer afbeeldingen om toe te voegen:</label>
            <input type="file" name="files[]" multiple="multiple" />
            <input type="submit" value="Upload" name="btnSubmit"/>
        </form>
    <?php endif ?>

<!-- Include footer -->
<?php include('inc/footer.php'); ?>