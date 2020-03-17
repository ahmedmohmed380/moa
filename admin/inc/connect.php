<?php
$dsn = "mysql:host=localhost;dbname=ahmedzakan";
$username = "root";
$password = "";

try {

    $con = new PDO($dsn, $username, $password);
    echo "you are connectd";

}
catch(Exception $e) {
    echo "Error: ". $e->getMessage();
}

  ?>