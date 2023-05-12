<?php
    $name = "Comments";
    include "assets/include/navbar.php";

    //Connect
    include "../../../dbConn.php";

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
    }
?>
<div class="content-comments">
    <div class="container-div">
        <?php
            //Retrieve all comments
            $prepSqlRetrieve = "SELECT Name, Comment, Timestamp FROM IndividualComments";
            $result = $mysqli -> query($prepSqlRetrieve);
            if (!$result) {
                die("Error in query: " . $mysqli->error);
            }
            // And display them
            while($row = $result -> fetch_assoc()) {
            echo '<p class="text-article"><strong>' . $row['Name'] . ":</strong> " . $row['Comment'] . " @ <i>" . $row['Timestamp'] . "</i></p>";
            } 
            $mysqli -> close();
        ?>
    </div>
    <!-- Display the same form that is on index -->
    <div class="container-div">
        <form method="GET">
            <h2 id="login-title2">Leave a comment!</h2>
            <label for="username" id="login-username-label2">&nbsp;&nbsp;Name</label>
            <input type="text" id="username" name="username" required id="login-username-input"><br>
            <label for="password" id="comment-label2">&nbsp;&nbsp;Comment</label>
            <input type="text" id="comment" name="comment" required id="comment-input"><br>
            <div id="buttons">
                <input type="submit" name="submit" value="submit" id="submit-button">
            </div>
        </form>
    </div>
</div>