<?php include("controler.php"); ?>

<p><h1>Submit your comment</h1></p>


<form action="controler.php" method="POST">

    <label for="username">Username:</label>
    <br>
    <input type="text" name="username"/>
    <br><br>

    <label for="comment">Comment</label>
    <br>
    <textarea name="comment" rows=5 cols=33></textarea>
    <br><br>

    <input type="submit" name="submit" value="Submit"/>
    <?php echo "<br><br>".$message; ?>
</form>


<a href="comment_list.php">See comments!</a>
