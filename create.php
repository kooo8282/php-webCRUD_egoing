<?php
require('lib/print.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <title>
    <?php            
    print_title();
    ?>
    </title>
</head>
<body>
    <style>
        body{
            font-family: Georgia, serif;
        }        
    </style>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <?php
        create_list();
        ?>
    </ol>   
    <a href="create.php">create</a>
    <form action="create_process.php" method="post">
    <p><input type="text" name="title" placeholder="Title"></p>
    <p><textarea name="description" placeholder="description" cols="30" rows="3"></textarea></p>
    <p><input type="submit"></p>
    </form>
    <h2>
    <?php            
    print_title();           
    ?>
    </h2>
    <?php
    print_content();
    ?>
</body>
</html>