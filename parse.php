<?php

$data = file_get_contents("http://rock.herokuapp.com/data");

$json_array = json_decode($data);

var_dump($json_array);


?>