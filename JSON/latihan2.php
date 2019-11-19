<?php
$data = file_get_contents('coba.js');
$mahasiswa = json_decode($data, true);

var_dump($mahasiswa);

echo $mahasiswa[0]["pembimbing"];
