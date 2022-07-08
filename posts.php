<?php 

require 'blogconnect.php';
$sql = "SELECT * FROM posts";

$rquery = mysqli_query($conn, $sql);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="posts.css">
    <title>Posts</title>
</head>
<body>

    <h2>Your posts</h2>
    <div class="container">
        <?php while ($post = mysqli_fetch_assoc($rquery)): ?>
        <div class="post-box">
            <h3><?php echo $post['post_title']; ?></h3>
            <p><?php echo $post['post_content']; ?></p>
            <span><a href="#">Delete</a></span>
        </div>
        <?php endwhile; ?>
        

        
    </div>

    
</body>
</html>