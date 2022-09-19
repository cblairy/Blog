<?
include ('../header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <fieldset>
        <legend>Write a post</legend>
        <form action="/Api/pendingPost.php" method="post">
            <label for="title">Title</label>
            <br>
            <input type="text" name="title" id="title">
            <br><br>
            <label for="content">Post</label>
            <br>
            <textarea name="content" cols="140" rows="6" placeholder="Today, i'm ..."></textarea>    
            <button>Send</button>
        </form>
    </fieldset>
    <??>
</body>
</html>
