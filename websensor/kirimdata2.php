<?php
 //koneksi ke databse
$konek = mysqli_connect("localhost","root","", "websensor");
//baca data yang dikirim oleh node mcu



$nilai2 = $_GET["sensor2"];



//update data di database

mysqli_query($konek, "update sensor set nilai_sensor2='$nilai2'");






?>