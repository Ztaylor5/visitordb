<!DOCTYPE html>
<html>
    <head>
    <meta charset = "utf-8">
    <title>Create MySQL DB on Azure</title>
</head>
        <body>
            <?php
            //replace the user name and password with your credentials
            $host = "dropbox07assignment.mysql.database.azure.com";
            $user = "ztaylor5";
            $password = "Jinisb34n$"
/*
// connect to the database
$conn = mysqli_connect($host, $user, $password);
if($conn)
echo "<p>Connection is good.</p>";
// drop the database
$query = "DROP DATABASE IF EXISTS visitorDB";
mysqli_query($conn, $query);
// create an sql query
$query = "CREATE DATABASE visitorDB";
// execute the query
if(mysqli_query($conn, $query))
echo "<p>Database created.</p>";
// we have the database, but no tables
mysqli_select_db($conn, "visitorDB"); 
*/
            $db = "visitordb";
            // connect to the database
            $conn = mysqli_init();
            mysqli_real_connect($conn, $host, $user, $password, $db, 3306);
            $query = "CREATE TABLE visitor
            (
                visitorid INTEGER AUTO_INCREMENT,
                visitorName VARCHAR(100) NOT NULL,
                visitTime TIMESTAMP DEFAULT NOW(),
                PRIMARY KEY(visitorid)
                )";
                if (mysqli_query($conn, $query))
                echo "<p>Table created.</p>";
            //close connection
            mysqli_close($conn);
            ?>
        </body>
            </html>