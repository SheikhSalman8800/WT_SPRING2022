<?php

include "../Model/model.php";
$fname=$lname=$age=$salary=$address=$id="";
if(isset($_POST["Insert"])){

        if(empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["age"]) || empty($_POST["salary"]) || empty($_POST["address"]))
        {
            echo "All field is required"."<br>"."<br>";
        }
        else
        {
            $dbobj=new db();
            $conobj=$dbobj->opencon();
            $dbobj->InsertData($conobj,'person',$_POST["fname"],$_POST["lname"],$_POST["age"],$_POST["salary"],$_POST["address"]);
            $dbobj->closecon($conobj);
        }
    

}

if(isset($_POST["ViewData"])){
    $dbobj=new db();
    $conobj=$dbobj->opencon();
    $presult=$dbobj->ViewData($conobj,'person');
    if($presult->num_rows>0)
    {
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Id</th>"."<th>First Name</th>"."<th>Last Name</th>"."<th>Age</th>"."<th>Salary</th>"."<th>Address</th>";
        echo "</tr>";
        while($row=$presult->fetch_assoc())
        {
            echo "<tr>";
            echo '<td>'.$row['Id'].'</td>';
            echo '<td>'.$row['fname'].'</td>';
            echo '<td>'.$row['lname'].'</td>';
            echo '<td>'.$row['age'].'</td>';
            echo '<td>'.$row['salary'].'</td>';
            echo '<td>'.$row['address'].'</td>';
            echo "</tr>";
        }
        echo "</table>"."<br>";
    }
    else
    {
        echo "No data found"."<br>"."<br>";
    }
    $dbobj->closecon($conobj);
}

if(isset($_POST["Searchbtn"])){
    if(empty($_POST["Search"]))
    {
        echo "Search Field is empty"."<br>"."<br>";
    }
    else
    {
        $dbobj=new db();
        $conobj=$dbobj->opencon();
        $sresult=$dbobj->SearchData($conobj,'person',$_POST["Search"]);
        if($sresult->num_rows>0)
        {
            //echo "<form action='' method='post'>";
            while($row=$sresult->fetch_assoc())
            {
                /*
                echo "<input type='text' name='fname' value='$row[fname]'>";
                echo "<input type='text' name='lname' value='$row[lname]'>";
                echo "<input type='text' name='age' value='$row[age]'>";
                echo "<input type='text' name='salary' value='$row[salary]'>";
                echo "<input type='text' name='address' value='$row[address]'>";
                */
                $id=$row['Id'];
                $fname=$row['fname'];
                $lname=$row['lname'];
                $age=$row['age'];
                $salary=$row['salary'];
                $address=$row['address'];
            }
            //echo "<input type='submit' name='Update' value='Update'>";

            //echo "</form>";
        }
        else
        {
            echo "No data"."<br>"."<br>";
        }
        $dbobj->closecon($conobj);
    }
}

if(isset($_POST["Update"])){
    if(empty($_POST["Id"]) || empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["age"]) || empty($_POST["salary"]) || empty($_POST["address"]))
    {
        echo "All field is required"."<br>"."<br>";
    }
    else
    {
        $dbobj=new db();
        $conobj=$dbobj->opencon();
        $dbobj->UpdateData($conobj,'person',$_POST["Id"],$_POST["fname"],$_POST["lname"],$_POST["age"],$_POST["salary"],$_POST["address"]);
        $dbobj->closecon($conobj);
    }
}

?>