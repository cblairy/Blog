<?php
include_once('../Api/pdo.php');

class Users {
    public int $id;
    public bool $isLoged;
    public bool $isAdmin;

    function __construct(        
        public string $firstname,
        public string $lastname,
        public string $birthday,
        public string $email,
        public string $username,
        public string $password,

    ) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->birthday = $birthday;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }

    // declaration des methodes :

    public static function createUser(): void
    {
        global $dbh;

        $email = $_POST['email'];     
        $password = hash('SHA256', $_POST["password"]);

        $read_query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";

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

    public function removePost(): void
        {
            
        }
    
        // Getter et setter
    public function getId(): int 
        {
            return $this->id;
        }
    
    public function setId(int $id): void
        {
            $this->id = $id;
        }

        public function getAdmin(): int 
        {
            return $this->isAdmin;
        }
    
    public function setAdmin(int $isAdmin): void
        {
            $this->isAdmin = $isAdmin;
        }

    public function getLog(): int 
        {
            return $this->isLoged;
        }
    
    public function setLog(int $isLoged): void
        {
            $this->isLoged = $isLoged;
        }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getDate(): date
    {
        return $this->date;
    }

    public function setDate(date $date): void
    {
        $this->date = $date;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): mixed
    {
        return $this->password;
    }

    public function setPassword(mixed $password){
        $this->password = $password;
    }


}

?>