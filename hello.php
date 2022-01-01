<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hello.php" method="post">
    <input type="number" name="number" placeholder="enter number">
    <input type="email" name="email" placeholder="enter email">
    <input type="text" name="surname" placeholder="enter surname">
    <input type="text" name="name" placeholder="enter name">
    <input type="submit">
    </form>


<?php
if ($_SERVER['REQUEST_METHOD' == 'POST'] ){
    $var1 = $_POST['number'];
    $var2= $_POST['email'];
    $var3 = $_POST['surname'];
    $var4 = $_POST['name'];
}

$servername = "localhost";
$username = "root";
$password  = "";
$database = "samuelfernandes";
$conn = mysqli_connect($servername, $username, $password);

if (!$conn){
    die("srrry canot connect" . mysqli_connect_error());
}else{
    echo "connection was successful";
}
$var1 = "";
$var2 = "";
$var3 = "";
$var4 = "";
$sql = "INSERT INTO `samuelfernandes` .`my table` (`sno`, `name`, `name123`, `name12`) VALUES ('$var1', '$var2', '$var3', '$var4');";
$result = mysqli_query($conn,$sql);

if ($result == TRUE){
echo "the db  was created successfully";
}else{
echo "the db wasnt created " . mysqli_error($conn);
}
?>
</body>
</html>




<!-- // $sql = "CREATE DATABASE samuelfernandes1";
// $result = mysqli_query($conn,$sql);

// if ($result == TRUE){
// echo "the db  was created successfully";
// }else{
// echo "the db wasnt created " . mysqli_error($conn);
// } -->
