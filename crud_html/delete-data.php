<?php
    $id=$_POST['sid'];
    $conn=mysqli_connect("localhost","root","","CRUD") or die("Connection Unsuccessful!");
    $query="DELETE FROM student WHERE sid={$id}";
    $result=mysqli_query($conn,$query) or die("Query Unsuccessful!");
    header('location:index.php');
    mysqli_close($conn);
?>