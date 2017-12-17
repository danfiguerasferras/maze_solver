<?php

require "helpers/requestReader.php";

$requestReader = new requestReader();
$requestReader->transformRequest($_POST);
