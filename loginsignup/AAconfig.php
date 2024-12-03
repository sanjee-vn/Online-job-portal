<?php 

    $server = "localhost";
    $un = "root";
    $pw = "";
    $db = "jobnexus";

    $con = new mysqli($server, $un, $pw, $db);

    if( $con -> connect_error)
    {
        die("Connection Failed ".$con -> connect_error);
    }
    else
    {
        echo "Connected Successfully";
    }

?>