<?
include ('../header.php');
echo $_SESSION['isAdmin'];
if($_SESSION['isAdmin'] === "1"){
    echo "Welcome " . $_SESSION['user'] . ", you are an Admin !!";
} else {
    echo "Access denied " . $_SESSION['user'];
}
?>