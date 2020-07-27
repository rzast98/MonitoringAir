<?php
 //koneksi ke databse
$konek = mysqli_connect("localhost","root","", "websensor");
//baca data yang dikirim oleh node mcu



$nilai4 = $_GET["sensor4"];



//update data di database

mysqli_query($konek, "update sensor set nilai_sensor4='$nilai4'");






?>