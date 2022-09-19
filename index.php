<?
include ('header.php');
//unset($_SESSION['user']);
//unset($_SESSION['userId']);
//unset($_SESSION['isAdmin']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Blog</title>

</head>
<body>
    <?
    include('/Api/addPost.php');
    ?>
</body>
</html>