<html><head> <title> Login</title> </head> <body>
<?php
session_start();
// Check if username and password are correct
if ($_POST[ "username"] = "Ammar" && $_POST["password"] == "19k-1435"){
// If correct, we set the session to YES
$_SESSION["Login"] = "YES";
echo "<h1> You are now logged correctly in</h1>";
echo "<p><a href='document.php'>Link to protected file</a><p/>";
}
else {
// If not correct, we set the session to NO
$_SESSION["Login"] = "NO";
echo "<h1>You are NOT logged correctly in </h1>";
echo "<p><a href-='document.php'>Link to protected file</a></p>";
} ?>

</body></html>