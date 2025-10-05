<?php

$jsonString = '{"nama":"Danu Agung Prayoga","nim":"230102018","jurusan":"Teknologi Informasi","semester":5}';


$obj = json_decode($jsonString);


$arr = json_decode($jsonString, true);


echo "Akses nilai dari PHP Object:<br>";
echo "Nama: " . $obj->nama . "<br>";
echo "NIM: " . $obj->nim . "<br><br>";

echo "Akses nilai dari PHP Array:<br>";
echo "Nama: " . $arr['nama'] . "<br>";
echo "NIM: " . $arr['nim'] . "<br>";
?>