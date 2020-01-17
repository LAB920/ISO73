<?php
session_start(); 

  if (!isset($_SESSION['username'])) {
  	header('location: login.php');
  }

    // Include header
    $title = 'Mijn account';
    include('inc/header.php');  
?>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welkom <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> id: <?= $_SESSION['user_id'] ?></p>
    	<p> <a href="index.php?logout='1'">Uitloggen</a> </p>
    <?php endif ?>
</div>

<!-- Include footer -->
<?php include('inc/footer.php'); ?>