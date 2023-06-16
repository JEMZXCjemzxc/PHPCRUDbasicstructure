<?php
include "conn.php";


//if(isset($_POST['name of the button']))
if(isset($_POST['submit'])){


 //inside the $_POST is the name of the input type from index.php
    $FNAME =$_POST['FNAME'];
    $MI =$_POST['MI'];
    $LNAME =$_POST['LNAME'];

    $sql = "INSERT INTO client (FNAME,MI,LNAME) VALUES('$FNAME','$MI','$LNAME')";


    if($conn->query($sql)){
        $_SESSION['success']= "Record Inserted";  
    }
    else{
        $_SESSION['error'] = "no record inserted";
    }
}

header("location:index.php");

?>