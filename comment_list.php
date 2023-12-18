<?php
    
    // echo 'starting<br>';
    include('model.php');

    $data = $conn->query('SELECT * FROM comments');
    // echo 'gathering data <br>';
    // var_dump($data);
    // echo "<br>";


    $comments = mysqli_fetch_all($data, MYSQLI_ASSOC);
    // var_dump($comments);
    ?>


    <h1>Comments:</h1>

    <?php foreach($comments as $comment): ?>
    
    <p><i>Commented by:</i> <?php echo $comment["username"];?></p> 
    <p><?php echo $comment["comment"];?></p>
    <br>

    <?php endforeach;?>

    <a href="form.php">Back to Form</a>
