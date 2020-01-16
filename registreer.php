<!-- Include header -->
<?php
    $title = 'Registreren';
    include('inc/header.php');
    include('registration/server_registration.php');  
?>

    <form method="post" action="registreer.php">
        <?php include('inc/errors.php'); ?>
        
        <div class="input-group">
            <label>Gebruikersnaam</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        
        <div class="input-group">
            <label>E-mailadres</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        
        <div class="input-group">
            <label>Wachtwoord</label>
            <input type="password" name="password_1">
        </div>
        
        <div class="input-group">
            <label>Herhaal wachtwoord</label>
            <input type="password" name="password_2">
        </div>
        
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Registreer</button>
        </div>
        
        <p>Al een account? <a href="login.php">Log in</a></p>
    </form>

<!-- Include footer -->
<?php include('inc/footer.php'); ?>