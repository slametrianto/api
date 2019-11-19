<?php
// $mahasiswa = [
//     [
//         "nama" => "slamet rianto",
//         "nrp" => "43a87006110075",
//         "email" => "slam@gmail.com"
//     ],

//     [
//         "nama" => "rianto",
//         "nrp" => "43a87006110060",
//         "email" => "rianto@gmail.com"
//     ]
// ];


$dbh = new PDO('mysql:host=localhost;dbname=ci_login', 'root', '');

//query databasenya
$db = $dbh->prepare('SELECT * FROM user');
//query menjalankan
$db->execute();
//ambil semua datanya fetchAll, bentuknya array assoc
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);



//   var_dump($mahasiswa);
$data = json_encode($mahasiswa);
echo $data;
