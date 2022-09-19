<?
require_once('pdo.php');
//var_dump($_POST);
if ($_POST["password"] === $_POST["confirmPassword"]) {
    $password = hash('SHA256', $_POST["password"]);
    $add_query = "INSERT INTO `users` (lastname, firstname, `password`, email, username, birthday) VALUES ('" . $_POST['lastname'] . "','" . $_POST['firstname'] . "', '$password','" . $_POST['email'] . "','" . $_POST['username'] . "','" . $_POST['birthday'] . "')";
} else {
    header("Location: ../Service/registration.php?msg=passwords%20are%20not%20identical");
}

    try {
        $sth = $dbh->query($add_query);
        echo "Inscription effectuée !";
    }
    catch (PDOException $e){
        echo "Registration failed : " . $e->getMessage();
    }

?>

<br><br>
<a href="../index.php">Connexion</a>