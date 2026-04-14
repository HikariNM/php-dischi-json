<?php 

//Read data file
$datas_text = file_get_contents('./data.json');

// Convert string from JSON
$datas = json_decode($datas_text, true);

// Insert new data into the file if the form is submitted
if (isset($_POST['title']) && isset($_POST['artist'])){
$new_data = [
    'title' => $_POST['title'] ?? '',
    'artist' => $_POST['artist'] ?? '',
    'cover' => $_POST['cover'] ?? '',
    'year' => $_POST['year'] ?? '',
    'genre' => $_POST['genre'] ?? ''
];
$datas[] = $new_data;

// Convert back to JSON string
$datas_text_encoded = json_encode($datas);

// Overwrite the content of the .json file
file_put_contents('./data.json', $datas_text_encoded);

// Redirect to index.php
header('Location: index.php');
exit;
}