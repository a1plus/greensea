<!--Include the Include Function for Header-->
<?php 
    $title = "Switch Statement";
    include 'includes/header.php' 
?>

<!--Switch Statement-->

<h1><?php echo "$title" ?></h1>


<body>
    <?php
        $grade = 'A';
        $name = 'Temmy';

        switch ($grade) {
            case 'A':
                echo '<h3 style = "color: green"> YOUR NAME IS: ' . $name . ',</h3>';
                echo '<h3 style = "color: green">' . $name . ', YOU REALLY DID WELL!</h3>';
                break;

            case 'B':
                echo '<h3 style = "color: blue"> YOUR NAME IS: ' . $name . ',</h3>';
                echo '<h3 style = "color: blue">' . $name . ', YOU ARE GOOD!</h3>';
                break;

            case 'C':
                echo '<h3 style = "color: blue"> YOUR NAME IS: ' . $name . ',</h3>';
                echo '<h3 style = "color: blue">' . $name . ', YOU ARE GOOD!</h3>';
                break;
        }

    ?>


    <!--Add Required Footer -->

    <?php 
        require 'includes/footer.php' 
    ?>