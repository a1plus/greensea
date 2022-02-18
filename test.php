<!--Include the Include Function for Header-->
<?php 
    $title = "Test";
    include 'includes/header.php' 
?>


<h1><?php echo "$title" ?></h1>
<?php

    $firstname = 'Samuel';
    $lastname = 'Adeola';
    $age = 99;

        echo '<h2>My First Name Is: ' . $firstname . '</h2>';
        echo '<h2>My Last Name Is: ' . $lastname . '</h2>';
        echo '<h2>My Full Name Is: ' . $firstname . ' ' . $lastname . '</h2>';
        echo '<h3>Call Me Either ' . $firstname . ' Or ' . $lastname . '. Do Your Know This Year Am Clocking ' . $age . ' Year On Earth.</h3>';
        echo "<h2>I am $age Year Old. </h2>";
?>
<!--Add Required Footer -->

<?php 
    require 'includes/footer.php' 
?>