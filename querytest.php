<?php
include 'connexpdo.php';

$idcon = connexpdo( 'pgsql:host=localhost;port=5432;dbname=citations;', 'postgres', 'password');

echo "<h1><strong>Auteurs de la BD</strong></h1>";
$query1 = "SELECT * from auteur"; //Auteurs
$result1 = $idcon->query($query1);
foreach($result1 as $data)
{
    echo $data['prenom']." ".$data['nom']."<br>";
}

echo "<h1><strong>Citations de la BD</strong></h1>";
$query2 = "SELECT * from citation"; //Citations
$result2 = $idcon->query($query2);
foreach($result2 as $data)
{
    echo $data['phrase']."<br>";
}

echo "<h1><strong>Siècles de la BD</strong></h1>";
$query3 = "SELECT * from siecle"; //Siècles
$result3 = $idcon->query($query3);
foreach($result3 as $data)
{
    echo $data['numero']."<br>";
}
