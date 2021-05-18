<?php
header('content-type:application/json;charset=utf-8');
$json=file_get_contents('./demo.json');
sleep(1);
echo $json;
?>
