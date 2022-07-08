<?php 

require 'blogconnect.php';

if (isset($_POST['publish-btn'])) {
    $postTitle = $_POST['post-title'];
    $postContent = $_POST['post-content'];


    $sql = "INSERT INTO posts(post_title,post_content) VALUES('$postTitle', '$postContent')";
    $rquery = mysqli_query($conn, $sql);



        if ($rquery == true) {
            header('location:posts.php');
        }
        else {
            echo "Error! Please try again";
        }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addpost.css">
    <title>Add Post</title>
</head>
<body>
    <div class="container">
        <form action=" " method="post">
        <div class="input-box">
            <input type="text" placeholder="Title" name="post-title">
        </div>
        
        <div class="input-box">
            <textarea name="post-content" class="post-content" placeholder="Write Something..."></textarea>
        </div>

        <div class="input-box">
            <select name="categories" disabled>
                <option value="" selected>Select Category</option>
            </select>
        </div>
        
        <div class="input-box">
            <button name="publish-btn">Publish</button>
        </div>
        
        </form>
    </div>
</body>
</html>