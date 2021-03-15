<?php
echo "Hi This is first echo from php";
?>
<!--=============== php and html ======================->
<!DOCTYPE html>
<html>

<head>
    <title><?php echo "This is my first PHP" ?> </title>
</head>

<body>
 <p>Hello from html </p>
</body>


</html>
<!--=============== end of php and html ======================->
<!--- This is important about " ?> " closing tag of php ------->

<!--    If a file contains only PHP code, it is preferable to omit the PHP closing tag at the end of the file. This prevents accidental whitespace or new lines being added after the PHP closing tag, which may cause unwanted effects because PHP will start output buffering when there is no intention from the programmer to send any output at that point in the script.-->