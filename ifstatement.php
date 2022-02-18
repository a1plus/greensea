<!--Include the Include Function for Header-->
<?php 
    $title = "IF STATEMENT";
    include 'includes/header.php' 
?>

<!--IF STATEMENT-->

<h1><?php echo "$title" ?></h1>
<?php

    //An IF STATEMENT will carry out an action based on the value of the variable.
    $name = 'Chris';
        echo '<h2>If Statement</h2>';
        echo '<h2>You Result is Out ' . $name . '</h2>';

    //if statements: ===, ==, >, <, >=, <=,
        $grade = 49.91;
        $name = 'Chris';

    if ($grade >= 49.9) {
        echo '<h3 style = "color: green">' . $name . ' YOU HAVE PASSED</h3>';
        } 
        else {
        echo '<h3 style = "color: red">SORRY ' . $name . ', YOU HAVE FAILED.</h3>';
        }

        //else-if statement
        $name = 'Femi';
        $grade = 'D';
        $percent = 49;

    if ($grade == 'A') {
        echo '<h3 style = "color: green">' . $name . ', YOU REALLY DID WELL!</h3>';
        } 
        elseif ($grade == 'B') {
        echo '<h3 style = "color: blue">' . $name . ', YOU ARE GOOD!</h3>';
        } 
        elseif ($grade == 'C') {
        echo '<h3 style = "color: yellow">' . $name . ', YOU PASSED AVERAGE!</h3>';
        }   
        elseif ($grade == 'D') {
        echo '<h3 style = "color: orange">' . $name . ', YOU PASSED ON CONSIDERATION</h3>';
        } 
        elseif ($grade == 'E') {
        echo '<h3 style = "color: red">' . $name . ' sorry, YOU FAILED</h3>';
        } 
        else {
        echo '<h3 style = "color: #800000">' . $name . ', YOU FAILED WHOLEFULLY</h3>';
        }


?>

<!--Add Required Footer -->

<?php
    require 'includes/footer.php'
?>