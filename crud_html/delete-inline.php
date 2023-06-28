<?php
                    $conn=mysqli_connect("localhost","root","","CRUD") or die("Connection failed!");
                    $id=$_GET['id'];
                    $query="DELETE FROM student  WHERE sid={$id}";
                    $result=mysqli_query($conn,$query) or die("Query Unsuccessful!");    
                    header('location:index.php');
                    mysqli_close($conn);
?>