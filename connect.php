<?php

// Localhost or cs dal.ca

$hostname = 'db.cs.dal.ca';
$user = 'fyang';
$password = '669NmuBSkLTm5oeqDCNe3D2Pi';
$database = 'fyang';

// establish a connection
try{
    $con = new PDO ("mysql:host=$hostname;
    dbname=$database", $user, $password);
    $con -> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Database connected';
}
catch(PDOException $e){
    echo 'Connection failed' .$e-> getMessage();
}

?>
