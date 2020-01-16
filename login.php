<!-- Include header -->
<?php
    $title = 'Inloggen';
    include('inc/header.php');  
    include('registration/server_registration.php');
?>

    <form method="post" action="login.php">
        <?php include('inc/errors.php'); ?>
        
        <div class="input-group">
        <label>Gebruikersnaam</label>
        <input type="text" name="username" >
        </div>
        
        <div class="input-group">
        <label>Wachtwoord</label>
        <input type="password" name="password">
        </div>
        
        <div class="input-group">
        <button type="submit" class="btn" name="login_user">Inloggen</button>
        </div>
        
        <p>Nog geen account? <a href="registreer.php">Registreer</a></p>
    </form>

<!-- Include footer -->
<?php include('inc/footer.php'); ?>