<?php

include "db_conn.php";


class School1
{
    function subject(){
        $subjects = [];
        while($sub = $GLOBALS['result']->fetch_object()){
            $subjects[] = $sub;
        }

        echo "<table border='1' cellspacing='0'>
                    <th>ID</th>
                    <th>Subject Name</th>
                    <th>Remarks</th>";
        foreach($subjects as $subject){
           
                  echo "<tr>
                        <td> {$subject->subject_id}</td>
                        <td> {$subject->s_name}</td>
                        <td> {$subject->s_remarks}</td>
                    </tr>";
        }
        echo "</table>";
    }
}

$stdInfo = new School1();
$stdInfo->subject();

?>

<?php
class studentName{
    public  $name;
    public function __construct($name)
    {
        return $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}
$obj = new studentName("Monir");

// echo $obj;

echo $obj->getName();


// $obj->setName("Monircdscs");

// echo $obj;