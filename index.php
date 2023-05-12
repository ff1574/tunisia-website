<?php
    $name = "Home";
    include "assets/include/navbar.php";

    //Connect
    include "../../../dbConn.php";

    //Submit new comment
    if (!empty($_GET['username']) && !empty($_GET['comment'])) {

        //Prepare
        $prepSql = "INSERT into IndividualComments (name, comment) VALUES (?, ?)";
        $statement = $mysqli->prepare($prepSql);
        //Bind parameters
        if ($statement === false) {
            echo "Error: " . $mysqli->error;
        }
        $statement->bind_param("ss", $_GET['username'], $_GET['comment']);


        //Execute
        $statement->execute();
        //Close
        $statement->close();

        // Redirect to comments and stop code
        header("Location: comments.php");
        exit();
    }
?>
    <!-- Simple title with three extra links and a form for submitting comments -->
    <div class="content-index">
        <h2 class="fancy-title">Tunisia</h2>
        <div class="login">
            <form method="GET">
                <h2 id="login-title">Leave a comment!</h2>
                <label for="username" id="login-username-label">&nbsp;&nbsp;Name</label>
                <input type="text" id="username" name="username" required id="login-username-input"><br>
                <label for="password" id="comment-label">&nbsp;&nbsp;Comment</label>
                <input type="text" id="comment" name="comment" required id="comment-input"><br>
                <div id="buttons">
                    <input type="submit" name="submit" value="submit" id="submit-button">
                </div>
            </form>
        </div>
        <a class="extra-link" href="comments.php">Comments</a>
        <a class="extra-link" href="grading.php" style="bottom: 17%;">Grading</a>
        <a class="extra-link" href="references.php">References</a>
    </div>
</body>
</html>