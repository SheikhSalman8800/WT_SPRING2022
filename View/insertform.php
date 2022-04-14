<?php

include "../Control/datainsertcheck.php";

?>

<html>
<head>
    <title>Data Insert</title>
</head>
<body>
    <h2>Add User</h2>
    <form action="" method="post">
        First Name: <input type="text" name="fname"><br>
        Last Name: <input type="text" name="lname"><br>
        dob: <input type="text" name="dob"><br>
        Age: <input type="number" name="age"><br>
        Salary: <input type="number" name="salary"><br>
        Phone: <input type="text" name="phone"><br>
        Address: <input type="text" name="address"><br>
        <input type="submit" name="Insert" value="Insert"><br>
    </form>
    <h2>View Users data</h2>
    <form action="" method="post">
        <input type="submit" name="ViewData" value="View Data">
    </form>
    <h2>Search Users</h2>
    <form action="" method="post">
        <input type="text" name="Search">
        <input type="submit" name="Searchbtn" value="Search">
    </form>
    <h2>Update User</h2>
    <form action="" method="post">
        <input type="number" name="Id" value="<?php echo $id;?>"><br>
        <input type="text" name="fname" value="<?php echo $fname;?>"><br>
        <input type="text" name="lname" value="<?php echo $lname;?>"><br>
        <input type="text" name="dob" value="<?php echo $dob;?>"><br>
        <input type="number" name="age" value="<?php echo $age;?>"><br>
        <input type="number" name="salary" value="<?php echo $salary;?>"><br>
        <input type="text" name="phone" value="<?php echo $phone;?>"><br>
        <input type="text" name="address" value="<?php echo $address;?>"><br>
        <input type="submit" name="Update" value="Update">
    </form>
</body>
</html>