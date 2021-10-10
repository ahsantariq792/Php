<?php

if (isset($_POST['name'])){

//setting dbase
$_SERVER="localhost";
$_USERNAME = "root";
$_PASSWORD ="";
$dbname = "rec";


//connect with sql dbase
$con = mysqli_connect($_SERVER,$_USERNAME,$_PASSWORD,$dbname);

if(!$con){
    die("connection failed");
}
else{
    echo("successful");
}



//taking data from form
$NAME=$_POST['name'];
$AGE=$_POST['age'];
$GENDER=$_POST['gender'];


//insert query
$sql = "INSERT INTO `rec` . `trip` (`name`,`age`,`gender`) VALUES ('$NAME','$AGE','$GENDER')";
echo $sql;


if ($con-> query($sql)==true){
    echo ("successful");
}
else{
    echo "y" . $con->error;
}


//create dbase
$sql = "CREATE DATABASE MyDBs";

if ($con-> query($sql)==true){
    echo ("successful");
}
else{
    echo "y" . $con->error;
}


//create table in dbase
$sql = "CREATE TABLE MYGuests(
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    lastname VARCHAR(6) NOT NULL 

    )";
    if ($con-> query($sql)==true){
        echo ("successful");
    }
    else{
        echo "y" . $con->error;
    }



//fetching data from data base
$sql = "SELECT age , gender from trip";

if ($con-> query($sql)-> num_rows > 0){
    while($row = $con-> query($sql)->fetch_assoc()){
        echo  "age: " . $row["age"]. " Gender " . $row["gender"]. "<br>";
}}

$sql = "SELECT age , gender from trip Where age = 122";

if ($con-> query($sql)-> num_rows > 0){
    while($row = $con-> query($sql)->fetch_assoc()){
        echo  "age: " . $row["age"]. " Gender " . $row["gender"]. "<br>";
}}


//update data
$sql = "UPDATE trip SET  age=19 Where sno = 1";
if ($con-> query($sql)==true){
    echo ("successful");
}
else{
    echo "y" . $con->error;
}

//delete data
$sql = "DELETE FROM table_name WHERE id = 1";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }



$con ->close();
}
?>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up Form</title>
</head>

<body>

    <div>
        <form action="crud.php" method="POST">
            <label>Name</label>
            <input type="text" placeholder="" id="name" name="name" >
            <br>
            <label>age</label>
            <input type="age" placeholder="" id="age" name="age" >
            <br>

            <label>gender</label>
            <input type="text" id="gender" name="gender" placeholder="" >
            <br>
            <input class="btn" type="submit" value="Sign-up">
        </form>
    </div>

</body>

</html> -->