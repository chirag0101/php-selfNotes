<?php
            if(isset($_FILES['uname'])){

                                                //tmp_name    pathtothefolder  filename
                move_uploaded_file($_FILES['uname']['tmp_name'],"imgs/".$_FILES['uname']['name']);                      //to move files to a folder in the device/server
                // if($_FILES['uname']['size']>1000){
                //     echo '<script>alert("Size limit 1 mb");</script>';
                // }

            }
?>

<html>
    <head><title></title></head>
    <body>

            <form action="" method="POST" enctype="multipart/form-data">                               <!-- we need to use enctype if we want to upload anything on the server -->
                <p>Upload File: <input type="file" name="uname"/></p>
                <p><input type="submit" name="save"></p>    
            </form>
            
    </body>
</html>