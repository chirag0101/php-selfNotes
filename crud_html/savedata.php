<?php
    $name=$_POST['sname'];
    $address=$_POST['saddress'];
    $c=$_POST['class'];
    $phno=$_POST['sphone'];

    if(isset($_POST['submit'])){
        if($name==""||$address==""||$c==""||$phno==""){
            echo "Please fill all the fields";
        }else{
                    $conn=mysqli_connect("localhost","root","","CRUD") or die("Connection failed!");
                    $query="INSERT INTO student(sname,saddress,sclass,sphone) VALUES('$name','$address','$c',$phno)";
                    $result=mysqli_query($conn,$query) or die("Query Unsuccessful!");
                    header('location:index.php');
                    mysqli_close($conn);
        }
    }
    
?>