<?php
    
    if(isset($_POST['submit'])){

        include("model.php");

        $username = $_POST['username'];
        $comment = $_POST['comment'];

        $sql = mysqli_query($conn,"
        INSERT INTO $table
        VALUES(
            '$username',
            '$comment'
        )
        ");
       
        header("Location: form.php?commentsubmitted");
        $message="Your comment is submitted!";
    }