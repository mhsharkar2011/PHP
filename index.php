<?php
include "Database.php";
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
            <div class="col-lg-6" style="column-width: 400px;">
                <div class="table-responsive-lg">
                <form action="" method="post" name="regForm" id="regForm" onsubmit="submitData();">
                    <table class="table">
                        <thead>
                            <tr>
                                <td class="text-center">PHP FUNDAMENTAL</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>First Name: <input class="form-control" type="text" name="first_name" /></td>
                            </tr>
                            <tr>
                                <td> Last Name: <input class="form-control" type="text" name="last_name" /></td>
                            </tr>
                            <tr>
                                <td>Email: <input class="form-control" type="text" name="email" /></td>
                            </tr>
                            <tr>
                                <td> <input type="submit" name="submit" value="Submit" /></td>
                            </tr>
                        </tbody>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>


<script>
    function submitData(){
        let inputData = document.querySelectorAll('#regForm').values;
        
    }
</script>
