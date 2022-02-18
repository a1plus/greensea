<!--Include the Include Function for Header-->
<?php 
    $title = "Functions";
    include 'includes/header.php' 
?>

<!--Functions Calling-->
<h1><?php echo "$title" ?></h1>

<?php

    /*Defining a Function */

    function mofeSope(){
        echo 'You are getting there Bro, CHEERS! <br/>';
        }

        /*Calling a Function */

        mofeSope();
        echo '<hr/>';
        mofeSope();
        echo '<hr/>';

    /*Function with a Parameter */

    function addPlus($num1, $num2) {
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 is: $sum <br/>";
        }

    /*Pass by Reference - use ampersand in parameter */
    function changeInt(&$num) {
        //add 10 to $num
        //$num + = 10;
        $num = $num + 10;

            echo "<hr/>";
            echo "We change the num value by adding 10 to its value, now it is: $num <br/><hr/>";
        }

    function returnProduct($num1, $num2) {
        $prod = $num1 * $num2;
        return $prod;
        }

        $num = 500;
            addPlus(23, 72);
            addPlus(17, $num);
            changeInt($num);

        $return_value = returnProduct(10, 200);

            echo "We return the value of the product, now it is: $return_value <br/><hr/>";

?>


<!--Add Required Footer -->

<?php
    require 'includes/footer.php'
?>