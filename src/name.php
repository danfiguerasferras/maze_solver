<?php

$name = "Dan Figueras";
$email = "dan.figueras@privalia.com";

$response = array(
    'name' => $name,
    'email' => $email
);

echo json_encode($response);