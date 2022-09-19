<?
include ('../header.php');
include ('../Api/pdo.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Blog</title>
</head>
<body>
    <h1>Welcome to bi-blog</h1>
    <fieldset class="fieldset1">
        <legend>Connection</legend> 
    <form action="../Api/connectionOK.php" method="post">
        <label for="email">email :</label>
        <br>
        <input type="email" name="email" id="email" size="40">
        <br><br>
        <label for="password">password :</label>
        <br>
        <input type="password" name="password" id="password">
        <button>Connection</button>
    </form>
    </fieldset>
    <?php
    if($_GET){
    echo '<p id="message" style="color: red; font-weight:bold">' . $_GET['msg'] . "</p>";
    }
    ?>
    <a href="registration.php" id="registration">Not registered ? it's here ...</a>
</body>
</html>