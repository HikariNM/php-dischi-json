<?php 

$datas_text = file_get_contents('./data.json');

$datas = json_decode($datas_text,true);
// var_dump($datas);
