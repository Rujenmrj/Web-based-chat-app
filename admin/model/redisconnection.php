<?php
// $redis = new Redis();
$redis->connect('127.0.0.1', 6379);
if($redis){
    echo "connected"; 
} // Replace with your Redis server's IP and port
?>