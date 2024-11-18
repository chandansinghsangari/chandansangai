<?php
$insert=FALSE;
if(isset($_POST['name'])){
    // set connection variable
    $server="localhost";
    $username="root";
    $password="";

    // create for database success 
    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }

    // collect post variable 
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $stoppage=$_POST['stoppage'];
    $photo=$_POST['photo'];
    $signature=$_POST['signature'];

    // echo"Succes connected to the bd";
    $sql = INSERT INTO `apply`. `apply` ( `name`, `dob`, `address`, `email`, `phone`, `Stoppage`, `photo`, `signature`, `dt`) VALUES ('$name', '$dob', '$address', ' $email', '$phone', ' $stoppage', '$photo',' $signature', current_timestamp());
    // echo $sql;



    // execute the query
    if($con->query($sql)==TRUE){
        // echo"successfully inserted";


        // Flag for successfull insertion
        $insert=TRUE;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // close the database connection
    $con->close();
}
?>


