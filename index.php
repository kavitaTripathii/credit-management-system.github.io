<?php
  $insert=false;
  if(isset($_POST['name']))
  {
    $server ="localhost";
    $username= "root";
    $password ="universe";
    $database ="students";
    $con = mysqli_connect($server,$username,$password,$database);

    if(!$con){
        die("connection to this database failed ,reason".mysqli_connect_error());
    }

    $name=$_POST['name'];
    $email=$_POST['email'];
    $credit=$_POST['credit'];

    $sql= "INSERT INTO `students`.`students` ( `name`,`email`,`credit`) VALUES ('$name','$email','$credit')";
    if($con ->query(($sql))== true)
    {
     $insert=true;
    }
    else
    {
     echo 'Error :'. $sql .'<br>'. $con ->error;
    }
    $con->close();
}
?>

<html>
<head>
    <title>index php Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>
<body>

<div class="container-fluid">
 <!--navbar ends-->

<!--Image-->
<div class="images">
<div class="box">
 <p>Banking and Financial Solutions<br> With GateWay</p>
</div>
     <div class="links">
      <p>Credit Management System</p></div><br>
        <div class="button" >
          <a class="text" href="getdetail.php"> Users List</a>
        </div>
        <br>
        <div class="button" >
          <a class="text" href="selectuser.php">Credit Transfer</a>
        </div><br>
        <div class="button" >
          <a class="text" href="index.html">Home</a>
        </div>
       
</div></div> 
  <div class="middle">
     <h1>Presented by Kavita Tripathi</h1>
  </div>
</body>
</html>