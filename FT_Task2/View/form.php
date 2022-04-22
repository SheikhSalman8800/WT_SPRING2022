<?php

include "../Control/checkform.php";

?>

<html>
<head>
    <title>Data Insert</title>
    <style>
        #errorp{
            color: red;
        }
    </style>
</head>
<body>
    <form action="" method="post" name="myForm" onsubmit="return validateForm()">
        First Name: <input type="text" name="fname">
        Password: <input type="password" name="pass">
        Age: <input type="number" name="age">
        Email: <input type="text" name="email">
        <input type="submit" name="Insert" value="Insert">
    </form>

    <p id="errorp"></p>

    <!-- <form action="" method="post">
        <input type="submit" name="ViewData" value="View Data">
    </form>

    <form action="" method="post">
        <input type="text" name="Search">
        <input type="submit" name="Searchbtn" value="Search">
    </form>

    <form action="" method="post">
        <input type="number" name="Id" value="<?php echo $id;?>">
        <input type="text" name="fname" value="<?php echo $fname;?>">
        <input type="text" name="lname" value="<?php echo $lname;?>">
        <input type="number" name="age" value="<?php echo $age;?>">
        <input type="number" name="salary" value="<?php echo $salary;?>">
        <input type="text" name="address" value="<?php echo $address;?>">
        <input type="submit" name="Update" value="Update">
    </form> -->

    <script src="../Js/script.js"></script>
</body>
</html>