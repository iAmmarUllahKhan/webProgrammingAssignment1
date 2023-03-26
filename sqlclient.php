<html>
<head>
    <title>MySQL Client Results</title>
</head>
<body>
<?php
    // Retrieve form input values
    $hostname = $_POST['hostname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $database_name = $_POST['database_name'];
    $query = $_POST['database_query'];
    
    // Create connection to MySQL server
    $connection = mysql_connect($hostname, $username, $password);
    
    if (!$connection) {
        die('Could not connect: ' . mysql_error());
    }
    
    echo 'Connected successfully<br>';
    
    // Select database
    mysql_select_db($database_name, $connection);
    

    
    mysql_query($query);
    
    mysql_close($connection);
?>
</body>
</html>