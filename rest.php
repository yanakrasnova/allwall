<?php

$response = array(
    'id' => 1,
    'user' => $_POST['name']
);

echo json_encode($response);
