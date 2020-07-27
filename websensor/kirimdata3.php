<?php
 //koneksi ke databse
$konek = mysqli_connect("localhost","root","", "websensor");
//baca data yang dikirim oleh node mcu



$nilai3 = $_GET["sensor3"];



//update data di database

mysqli_query($konek, "update sensor set nilai_sensor3='$nilai3'");






?>