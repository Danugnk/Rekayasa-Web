<?php
$mahasiswa = array(
    "nama" => "Danu Agung Prayoga",
    "nim" => "230102018",
    "jurusan" => "Teknologi Informatika",
    "semester" => 5 
);

$jsonData = json_encode($mahasiswa);

echo "Hasil JSON Encode:<br>";
echo $jsonData;
?>