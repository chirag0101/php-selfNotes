<?php
    $sid=$_POST['sid'];
    $name=$_POST['sname'];
    $address=$_POST['saddress'];
    $c=$_POST['sclass'];
    $phno=$_POST['sphone'];

                    $conn=mysqli_connect("localhost","root","","CRUD") or die("Connection failed!");
                    $query="UPDATE student SET sname='{$name}',saddress='{$address}',sclass='{$c}',sphone={$phno} WHERE sid={$sid}";
                    $result=mysqli_query($conn,$query) or die("Query Unsuccessful!");
                    header('location:index.php');
                    mysqli_close($conn);
    
?>