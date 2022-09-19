<?

$read_query = "SELECT * FROM `Pending` WHERE `email` = '$email' AND `password` = '$password'";

        try {
            $sth = $dbh->query($read_query)->fetchAll(PDO::FETCH_ASSOC);
    
            if($sth){
                $user = new Users($sth[0]['firstname'], $sth[0]['lastname'], strtotime($sth[0]['birthday']), $sth[0]['email'], $sth[0]['username'], $sth[0]['is_admin']);
                $_SESSION['user'] = $user->getUsername();

                $user->setId(intval($sth[0]['user_id']));
                $_SESSION['userId'] = $user->getId();

                $user->setAdmin(intval($sth[0]['is_admin']));
                $_SESSION['isAdmin'] = $user->getAdmin();

                header("Location: ../index.php");
            } else {
                header("Location: ../Service/connection.php?msg=incorrect%20credentials");
            }
        }
        catch (PDOException $e){
            echo "Connection failed : " . $e->getMessage();
        }
    }

?>