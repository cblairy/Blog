<?

// initialisation des parametres session
session_name("user");
$lifetime = 60*60*24;
session_set_cookie_params([
    'lifetime' => $lifetime,
    'domain' => $_SERVER['HTTP_HOST'],
]);
session_start();

require_once('pdo.php');
require_once('../Models/Users.php');

//print_r(PDO::getAvailableDrivers());

Users::createUser();

?>