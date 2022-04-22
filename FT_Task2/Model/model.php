<?php

class db{
    function opencon(){
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="testdb";

        $conn= new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error)
        {
            echo "Could not connect";
        }
        return $conn;
    }

    function InsertData($conn,$tablename,$fname,$lname,$age,$salary,$address){
        $sql="INSERT INTO $tablename (fname,lname,age,salary,address) VALUES ('$fname','$lname','$age','$salary','$address')";

        if($conn->query($sql)===TRUE)
        {
            echo "data inserted";
        }
        else
        {
            echo "data can't insert".$conn->error;
        }
    }

    function ViewData($conn,$tablename){
        $sql="SELECT * FROM $tablename";

        $result=$conn->query($sql);
        return $result;
    }

    function SearchData($conn,$tablename,$id){
        $sql="SELECT * FROM $tablename WHERE id='$id'";

        $result=$conn->query($sql);
        return $result;
    }

    function UpdateData($conn,$tablename,$id,$fname,$lname,$age,$salary,$address){
        $sql= "UPDATE $tablename SET fname='$fname',lname='$lname',age='$age',salary='$salary',address='$address' WHERE Id='$id'";

        if($conn->query($sql)===TRUE)
        {
            echo "Data updated";
        }
        else
        {
            echo "Error! Data not updated".$conn->error;
        }
    }

    function closecon($conn){
        $conn->close();
    }
}

?>