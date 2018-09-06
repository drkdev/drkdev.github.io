<?php
print_r($_POST);

$inputJSON = file_get_contents('php://input');
$input     = json_decode($inputJSON, true);

file_put_contents('test.txt', print_r($input, true));