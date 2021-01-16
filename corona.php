<?php
$data=file_get_contents('https://covid-19.dataflowkit.com/v1');
$coronadata=json_decode($data);
echo "<pre>";
print_r($coronadata);

 ?>
