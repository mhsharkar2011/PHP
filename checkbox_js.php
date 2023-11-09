<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>
<body>
   
    <form action="" method="post" name="allSubject" id="allSubject" onsubmit="multSubSelect(); return false;">
        <table>
            <tr>
                <td><h1>Select Multiple Subject</h1></td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="subject" value="Bangla" />Bangla
                    <input type="checkbox" name="subject" value="English"  />English
                    <input type="checkbox" name="subject" value="Math"  />Math
                    <input type="checkbox" name="subject" value="Science" />Science
                    <input type="checkbox" name="subject" value="Other" />Other
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
<div id="show"></div>
</body>
</html>

<script>
    function multSubSelect()
    {
        let count = document.querySelector('#allSubject').subject.length;
        let subArray = [];
        for(i=0;i<count; i++){
            let checkSub = document.allSubject.subject[i].checked;
            if(checkSub){
                let subValues = document.allSubject.subject[i].value;
                subArray.push(subValues);
            }
        }
        let totalSub = subArray.join(', ');
            if(totalSub){
                document.getElementById('show').innerHTML = totalSub;
            }
    }
</script>