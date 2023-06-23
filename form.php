<html>

    <head>
        <title>FORM</title>
    </head>
    
    <body bgcolor="#008B8B">

        <!-- <form action="formData.php" method="get"> -->

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

   <center>
            <p>Enter Name: <input type="text" name="uname"></p>
            <p>Enter Age:    <input type="number" name="age"></p>
            <p><input type="submit" name="save"></p>
   </center>

        </form>
        <?php
            if(isset($_POST['save'])){
                echo $_POST['uname']."<br>";
                echo $_POST['age']."<br>";
            }
        ?>
    </body>

    </html>