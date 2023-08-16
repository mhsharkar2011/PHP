<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>

    <?php 
        if(isset($_POST['submit'])){
            if(isset($_POST['subject'])){
                $selectSubjects = $_POST['subject'];
                echo "Selected subjects: " . implode(", ", $selectSubjects);
            }else{
                echo "No Subject selected";
            }

            // $subjects = $_POST['subject'];
            // echo "You have selected: ";
            // $countSubject = count($subjects);
            // foreach($subjects as $key=>$value){
            //      echo $value;
            //      if($key < $countSubject - 1){
            //         echo ", ";
            //      }
            // }
        }
    ?>
</head>
<body>
   
    <form action="" method="post" name="allSubject" id="allSubject" onsubmit="checkedSubject(); return false;">
        <table>
            <tr>
                <td><h1>Select Multiple Subject</h1></td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="subject[]" value="Bangla" />Bangla
                    <input type="checkbox" name="subject[]" value="English"  />English
                    <input type="checkbox" name="subject[]" value="Math"  />Math
                    <input type="checkbox" name="subject[]" value="Science" />Science
                    <input type="checkbox" name="subject[]" value="Other" />Other
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