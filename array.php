<!--Include the Include Function for Header-->
<?php 
    $title = "Arrays and Printouts";
    include 'includes/header.php' 
?>

<!--Arrays and Variables-->
<H1 style="color:red"><?php echo "$title" ?> </H1>
<?php
    // a variable 
    $num = 3;

    // an array
    //only-one datatype
    $numb = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 106, 23, 45, 123, 653, 432, 65, 21, 89, 453, 763, 876,);
        echo '<p style="color:blue">' . $numb[6] . '</p>';
        echo $numb[9];
        echo "<hr/>$numb[1]<hr/>";
    //counting the number of subscript of the arrays.
    $totalnum = count($numb);
        echo "<h3 style='color:red'> The Total NUMBERS IN HERE IS: $totalnum</h3>";

    for ($count = 0; $count < $totalnum; $count++) {
        echo '<p>' . $numb[$count] . '</p><hr/>';
    }


?>

<!--Add Required Footer -->

<?php
    require 'includes/footer.php'
?>