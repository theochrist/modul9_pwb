<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$con = mysqli_connect("localhost", "root", "", "krs");
if (!$con) {
  die("koneksi tidak berhasil : " . mysqli_connect_error());
}
