<?php

class db{
    function opencon(){
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="FT_Task1";

        $conn= new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error)
        {
            echo "Can not connect!!";
        }
        return $conn;
    }

    function InsertData($conn,$tablename,$fname,$lname,$dob,$age,$salary,$phone,$address){
        $sql="INSERT INTO $tablename (fname,lname,dob,age,salary,phone,address) VALUES ('$fname','$lname','$dob','$age','$salary','$phone','$address')";

        if($conn->query($sql)===TRUE)
        {
            echo "User inserted";
        }
        else
        {
            echo "User insertion failed".$conn->error;
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

    function UpdateData($conn,$tablename,$id,$fname,$lname,$dob,$age,$salary,$phone,$address){
        $sql= "UPDATE $tablename SET fname='$fname',lname='$lname',dob='$dob',age='$age',salary='$salary',phone='$phone',address='$address' WHERE Id='$id'";

        if($conn->query($sql)===TRUE)
        {
            echo "User profile updated";
        }
        else
        {
            echo "User profile can't be updated".$conn->error;
        }
    }

    function closecon($conn){
        $conn->close();
    }
}

?>