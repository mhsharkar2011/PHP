<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Username: <input type="text" name="username" />
    

    <?php $username = $_GET['username']; ?>
    <a href="get.php?username=<?php echo $username; ?>">Get Data</a>

   </form>

   <?php
   if($_SERVER['REQUEST_METHOD'] = "POST")
   {
    $name = $_REQUEST['username'];

    if(empty($name))
    {
        echo "<span style = 'color:red'>Username field is required: </span>";
    }else{
        echo "<span style = 'color:green'>You have submitted: $name </span";
    }
   } 
   ?>




</body>
</html>