<?php
include "show.php";

// $sql = "INSERT INTO users ('$full_name',)"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial List of PHP Fundamental and OOP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col" style="column-width: 400px;">
                <div class="table-responsive-lg">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">PHP Fundamental</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <form action="" method="post">
                                        Name: <input type="text" name="username" /><br />
                                        Email: <input type="text" name="email" /><br />
                                        <input type="submit" name="submit" value="Submit" />
                                    </form>
                                    <?php 
                                    if(isset($_POST['submit'])){
                                        $username = $_POST['username'];
                                        $email = $_POST['email'];
                                            foreach($results as $result){
                                                echo $result->username;
                                            }

                                    }
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>