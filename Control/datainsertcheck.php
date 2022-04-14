<?php

include "../Model/model.php";
$fname=$lname=$dob=$age=$salary=$phone=$address=$id="";
if(isset($_POST["Insert"])){

        if(empty($_POST["fname"]) || empty($_POST["lname"]) ||empty($_POST["dob"])|| empty($_POST["age"]) || empty($_POST["salary"]) ||empty($_POST["phone"])|| empty($_POST["address"]))
        {
            echo "Empty field is not required"."<br>"."<br>";
        }
        else
        {
            $dbobj=new db();
            $conobj=$dbobj->opencon();
            $dbobj->InsertData($conobj,'person',$_POST["fname"],$_POST["lname"],$_POST["dob"],$_POST["age"],$_POST["salary"],$_POST["phone"],$_POST["address"]);
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
        echo "<th>Id</th>"."<th>First Name</th>"."<th>Last Name</th>"."<th>DOB</th>"."<th>Age</th>"."<th>Salary</th>"."<th>Phone</th>"."<th>Address</th>";
        echo "</tr>";
        while($row=$presult->fetch_assoc())
        {
            echo "<tr>";
            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['fname'].'</td>';
            echo '<td>'.$row['lname'].'</td>';
            echo '<td>'.$row['dob'].'</td>';
            echo '<td>'.$row['age'].'</td>';
            echo '<td>'.$row['salary'].'</td>';
            echo '<td>'.$row['phone'].'</td>';
            echo '<td>'.$row['address'].'</td>';
            echo "</tr>";
        }
        echo "</table>"."<br>";
    }
    else
    {
        echo "No user found"."<br>"."<br>";
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
            while($row=$sresult->fetch_assoc())
            {
                
                $id=$row['id'];
                $fname=$row['fname'];
                $lname=$row['lname'];
                $dob=$row['dob'];
                $age=$row['age'];
                $salary=$row['salary'];
                $phone=$row['phone'];
                $address=$row['address'];
            }
        
        }
        else
        {
            echo "No user"."<br>"."<br>";
        }
        $dbobj->closecon($conobj);
    }
}

if(isset($_POST["Update"])){
    if(empty($_POST["Id"]) || empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["dob"]) || empty($_POST["age"]) || empty($_POST["salary"]) ||empty($_POST["phone"]) || empty($_POST["address"]))
    {
        echo "Empty field is not required"."<br>"."<br>";
    }
    else
    {
        $dbobj=new db();
        $conobj=$dbobj->opencon();
        $dbobj->UpdateData($conobj,'person',$_POST["Id"],$_POST["fname"],$_POST["lname"],$_POST["dob"],$_POST["age"],$_POST["salary"],$_POST["phone"],$_POST["address"]);
        $dbobj->closecon($conobj);
    }
}

?>