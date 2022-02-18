<!--Include the Include Function for Header-->
<?php 
    $title = "Date and Time Manipulation";
    include 'includes/header.php' 
?>

<!--Date and Time Manipulation-->
<h1><?php echo "$title" ?></h1>
<?php

    $newdate = getdate();
        echo "Today's Date is: <br/>";
        echo $newdate['mday'] . '<br/>';
        echo $newdate['mon'] . '<br/>';
        echo $newdate['year'] . '<br/>';
        echo '<hr/>';
        echo "Today:" . $newdate['mday'] . '/' . $newdate['mon'] . '/' . $newdate['year'];
        echo '<hr/>';
        echo "Today's Date is: " . $newdate['mon'] . '/' . $newdate['mday'] . '/' . $newdate['year'] . '<hr/>';
        echo '<br/>';

        echo time() . '<br/>';

        print date("m/d/y G.i:s<br/>", time()) . '<br/>';
        print "Today is ";
        print date("j F Y, \a\\t g.i a", time());


?>

<!--Add Required Footer -->

<?php
    require 'includes/footer.php'
?>