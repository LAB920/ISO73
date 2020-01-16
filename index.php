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

    <!-- Slideshow -->
    <div class="split-slideshow">
        <div class="slideshow">
            <!-- Image slides -->
            <div class="slider">
                <div class="item">
                    <img src="https://images.unsplash.com/photo-1516828848398-e04c82e9205a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1053&q=80" />
                </div>
                <div class="item">
                    <img src="https://images.unsplash.com/photo-1573042159676-7f32117b4f63?ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80" />
                </div>
                <div class="item">
                    <img src="https://images.unsplash.com/photo-1548866334-6ebb8c354ce8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" />
                </div>
                <div class="item">
                    <img src="https://images.unsplash.com/photo-1485202529130-87b1b5f112e8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" />
                </div>
            </div>
        </div>
        <!-- Text slides -->
        <div class="slideshow-text">
            <div class="item">Wij zijn</div>
            <div class="item">ISO'73</div>
            <div class="item">Fotogroep</div>
            <div class="item">Landgraaf</div>
        </div>
    </div>

<!-- Include footer -->
<?php include('inc/footer.php'); ?>