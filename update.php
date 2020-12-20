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
    <?php if(isset($_GET['id'])) { ?>
    <a href="update.php?id=<?= $_GET['id'] ?>">update</a>
    <?php } ?>
    <h2>
    <?php            
    print_title();           
    ?>
    </h2>
    <?php
    print_content();
    ?>
    <form action="update_process.php" method="post">
        <input type="hidden" name="old_title" value="<?= $_GET['id'] ?>" />
    <p><input type="text" name="title" placeholder="Title" value="<?php print_title() ;?>"></p>
    <p><textarea name="description" placeholder="description" cols="50" rows="10"><?php print_content() ;?></textarea></p>
    <p><input type="submit"></p>
    </form>
</body>
</html>