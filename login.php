<?php


$host = 'localhost';
$user = 'id19359569_onblibd';
$password = 'Stevemagal741195200$'; 
$database = 'id19359569_onbli'; 
$port = NULL; 
$mysqli = new mysqli($host, $user, $password, $database, $port);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
/*
echo '<p>Connection OK '. $mysqli->host_info.'</p>';
echo '<p>Server '.$mysqli->server_info.'</p>';
echo '<p>Initial charset: '.$mysqli->character_set_name().'</p>';
*/
/* 

fechar a conexão $mysqli->close();
 
 */



?>