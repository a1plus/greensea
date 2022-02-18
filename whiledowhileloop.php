<!--Include the Include Function for Header-->
<?php 
    $title = "wHILEdOwHILElOOP";
    include 'includes/header.php' 
?>


<!--wHILEdOwHILElOOP-->

<h1><?php echo "$title" ?></h1>
<h1>While Loop</h1>
<?php
    $grade = 0;

        //infinite loop
        //while ($grade < 10) {
        //echo '<p>I am less than 10</p>';
        //}

        //Pre-Condition Loop
        while ($grade < 10) {
            echo '<p>I am less than 10</p>';
            $grade++;
        }

            echo 'END OF THE LOOP';

?>


<h1>Do-While Loop</h1>
<?php
    //Post-Condition Loop
    $grade = 0;

        do {
            echo '<p>I am Do While Loop</p>';
            $grade++;
        } while ($grade < 10);

            echo 'END OF THE LOOP';

?>


<!--Add Required Footer -->

<?php 
    require 'includes/footer.php' 
?>