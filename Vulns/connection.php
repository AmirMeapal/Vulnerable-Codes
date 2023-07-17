<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "vuln1";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){ //mysqli_connect is used to establish a connection to a MySQL database
//mysqli_connect returns a MySQLi object if the connection to the MySQL server is successful, this object ($con) can be used to 
//execute queries on the DB.

    die("failed to connect to DB, reason:" . mysqli_connect_error()); //might not be best thing security-wise to show the error, 
                                                                      //but this is just as POC in a simple project.
}