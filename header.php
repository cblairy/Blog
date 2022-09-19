<?
session_name("user");
session_start();
//print_r($_SESSION);

?>
<link rel="stylesheet" href="/style/header.css">
<header id="header">
    <a href="/index.php">Home</a>
    <?
    if(!$_SESSION){
        echo "<a href='/Service/connection.php'>Sign in</a>";
    } else {
        echo "<p><a href='/Service/formPost.php'>Create post</a></p>";
        if($_SESSION['isAdmin'] == 1){
            echo "<a href='/Api/managePosts.php'>Manage posts</a>";
        }
        echo "<a href='/Api/signOut.php'>Sign out</a>";
    }

    ?>
</header>