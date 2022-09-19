<?php
include_once('../Api/pdo.php');

class Posts {
    protected static int $comcount;
    protected int $idPost;

    function __construct(        
        protected string $title,
        protected string $content,
        protected int $idAuthor
    ) {
        $this->title = $title;
        $this->content = $content;
        $this->idAuthor = $idAuthor;
    }

    // declaration des methodes :
    public static function createPost($id): void
        {
            global $dbh;

            $title = urlencode($_POST['title']);
            $content = urlencode($_POST['content']);
            $idAuthor = $id;
            $add_query = "INSERT INTO `Pending` (title, content, author_id) VALUES ('$title', '$content', '$idAuthor')";
//rawurlencode($nom)
            try {
                $sth = $dbh->query($add_query);
                echo "<br>Post Sent, awaiting validation by an administrator !";
                //header("Location: ../index.php");
            }
            catch (PDOException $e){
                echo "Error sending post : " . $e->getMessage();
            }
            //$post = new Posts($title, $content, $idAuthor);
        }

    public static function managePost(): void 
    {
        global $dbh;
        $read_query = "SELECT * FROM `Pending`";

        try {
            $sth = $dbh->query($read_query)->fetchAll(PDO::FETCH_ASSOC);
            foreach($sth as $element){
                ?>
                <form action="managePost.php" method="post">
                <fieldset><br>
                <? echo "<legend>" . urldecode($element['title']) . "</legend>";
                echo "<p>" . urldecode($element['content']) . "</p>";
                echo "<p>Author ID is " . $element['author_id'] . "</p>";
                echo "<button>Add</button>";
                echo "<button>Delete</button>";
                echo "</fieldset></form>";

            }
        }
        catch (PDOException $e){
            echo "failed : " . $e->getMessage();
        }
    }

    public function removePost(): void
        {
           
        }

    public function getAuthor(): void
        {

        }
    
}
?>