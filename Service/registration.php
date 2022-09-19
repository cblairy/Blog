<?
include ('../header.php');
?>
<link rel="stylesheet" href="../style/style.css">
<fieldset class="fieldset1">
    <legend>Inscription</legend>
    <form action="../Api/registrationOK.php" method="post">
        <label for="email">email :</label>
        <br>
        <input type="email" id="email" size="30" name="email" required>
        <br>

        <label for="lastname">Nom :</label>
        <br>
        <input type="text" name="lastname" id="lastname">
        <br>

        <label for="firstname">Prénom :</label>
        <br>
        <input type="text" name="firstname" id="firstname">
        <br>

        <label for="Username">Username :</label>
        <br>
        <input type="text" name="username" id="username">
        <br>

        <label for="birthday">Date de naissance :</label>
        <br>
        <input type="date" name="birthday" id="birthday">
        <br><br>

        <label for="password">Mot de passe :</label>
        <br>
        <input type="password" name="password" id="password">
        <br>

        <label>Confirm :</label>
        <br>
        <input type="password" name="confirmPassword">
        <?php
            if($_GET){
            echo '<p id="message" style="color: red; font-weight:bold">' . $_GET['msg'] . "</p>";
            }
        ?>
        <button>Register</button>
    </form>
</fieldset>