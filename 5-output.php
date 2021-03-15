<?php
//faster than print 
    echo "Hello from php "; //string 
    echo 20; //number 
?>
<!------------------------------------------------->
<!DOCTYPE html>
<html>

<head>
    <title><?php echo "This is my first PHP" ?> </title>
</head>

<body>
    <?php echo "<br> hello from php inside html with double Quotation " ?>
    <?php echo '<br> hello from php inside html wiht single Quotation' ?>
    <?php echo '<br> --------------------------------------- ' ?>
    <h1><?php   echo "heading"; ?></h1>
    <p><?php echo 'this paragraph' ?></p>
    <?php echo '<br> --------------- same as above but different way of typing ------------------------ ' ?>
    <?php echo "
     <h1>heading</h1>
     <p>this paragraph</p>
    ";
    ?>
    <?php echo "<br> --------------- same as above but different of single double Quotation ------------------------ " ?>
    <?php 
     echo "<h1 class =\"one\"> This is diffrent Quotation </h1>";
     echo "<h1 class ='one'> This is diffrent Quotation </h1>";

    ?>
</body>


</html>
