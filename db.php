<?php

$conn = mysqli_connect("localhost", "root", "", "educom");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>