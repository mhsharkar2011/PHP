<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Coder</title>
</head>
<body>
    <?php 
        if(isset($_POST['submit'])){
            $language = $_POST['language'];

            echo $language;
        }
    ?>
    <h3>Programming Language</h3>
    <form action="" method="post" >
        <select name="language" id="language">
            <option value="">Select One</option>
            <option value="PHP">PHP</option>
            <option value="JAVA">JAVA</option>
            <option value="C#">C#</option>
            <option value="C++">C++</option>
            <option value="Python">Python</option>
        </select>
            <br/>
            <br/>
            <input type="submit" name="submit" value="Submit" />
            <input type="reset" name="clear" value="Clear" />
    </form>
</body>
</html>