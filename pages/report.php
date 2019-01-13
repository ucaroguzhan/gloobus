<?php

include '../includes/header.php';

?>


<div id="report">

   <h1>Your message has been succesfully sent!</h1>
    <div id="report-content">
    <?php


    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

        // Nach der Erstellung der Datenbank, kann diese Code angewendet werden.
        /*$connection = mysqli_connect('localhost', 'root', '', 'gloobusdatabase')

            or die ('error connecting to database server.');

        $query = "INSERT INTO gloobus_customer(name, email, comment)".
                 "VALUES ('$name','$email', '$comment')";


        $result = mysqli_query($dbc, $query)
        or die ('error querying database');

        mysqli_close($connection);*/


    echo "<h2>Thank you for submitting your comment. </h2>";
    echo "<h2> We are going to contact you as soon as possible. </h2>";
    echo "<a href='../index.php'>return to homepage</a>";
    ?>


    </div>
</div>

<?php

include '../includes/footer.php'

    ?>
