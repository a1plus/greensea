<!--Add Required Footer -->
<?php 
    $title = "Home";
    include 'includes/header.php' 
?>

<!--INDEX PAGE -->
<!--INDEX PAGE -->
<h1> <?php echo "Welcome, $title" ?> </h1>
<p>A new html paragraph</p>

<?php

    //Printing to HTML
    echo "New Paragraph";
    echo "<br/>";
    echo "Another Paragraph";


    //declare a variable
    $name = 'Olajide Samuel';

        //print the variable
        echo $name;

?>
    <br/>
    <button type="button" class="btn btn-warning"><b>Click Here Jare</b></button>
    <button type="button" class="btn btn-success"><b>Click Here Jare</b></button>
    <a href="https://www.greenseatop.com" target="_blank" rel="noopener noreferrer" class="btn btn-danger">GreenSea Top</a>

<!--Add Required Footer -->
<?php 
    require 'includes/footer.php' 
?>