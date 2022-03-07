<?php
function getPackages()
{
    global $pdo;
    $query=$pdo->prepare("SELECT * FROM packages ");
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_CLASS,"Subscription" );
    return $result;
}