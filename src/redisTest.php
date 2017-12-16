<?php

$redisClient = new Redis();

$redisClient->connect('127.0.0.1', 6379);
echo "Connection to server sucessfully";
//store data in redis list
$redisClient->lpush("tutorial-list", "Redis");
$redisClient->lpush("tutorial-list", "Mongodb");
$redisClient->lpush("tutorial-list", "Mysql");

// Get the stored data and print it
$arList = $redisClient->lrange("tutorial-list", 0 ,5);
echo "Stored string in redis:: ";
print_r($arList);
