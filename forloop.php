<!--Include the Include Function for Header-->
<?php 
    $title = "FOR LOOPS";
    include 'includes/header.php' 
?>

<!--FOR LOOPS-->

<h1 style="color:red"> <?php echo "$title" ?></h1>
<?php
    //for loops
    for ($count = 0; $count < 10; $count++) {
        echo '<p>SAY SAY MALAY </p>';
    }

    for ($counte = 0; $counte < 10; $counte++) {
        echo "<p>OMO SEE THIS BOY, E CHOP: $counte Cakes.</p>";
        echo '<p>OMO C DIS BOI, E CHOP: ' . $counte . ' CAKES</p>';
    }

?>


<!--Add Required Footer -->

<?php
    require 'includes/footer.php'
?>