<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>

    <?php 
        if(isset($_POST['submit'])){
           
        }
    ?>
</head>
<body>
    <div id="subject"></div>
    <form action="" method="post" name="allSubject" id="allSubject" onsubmit="selectSubject(); return false;">
        <table>
            <tr>
                <td><h1>Select Multiple Subject</h1></td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="subject[]" value="Bangla" <?php if(in_array("Bangla",$selectSubjects,true)) echo "checked"; ?> />Bangla
                    <input type="checkbox" name="subject[]" value="English" <?php if(in_array("English",$selectSubjects,true)) echo "checked"; ?> />English
                    <input type="checkbox" name="subject[]" value="Math" <?php if(in_array("Math",$selectSubjects,true)) echo "checked" ?> />Math
                    <input type="checkbox" name="subject[]" value="Science" <?php if(in_array("Science",$selectSubjects,true)) echo "checked"?> />Science
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Submit" />
                    <input type="reset" value="Clear" />
                </td>
            </tr>
        </table>
    </form>

</body>
</html>