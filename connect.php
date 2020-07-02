<?php 
$conn = oci_connect("taufikar07052", "taufik123", "localhost/XE");

if(!$conn) {
	$e = oci_error();
	echo $e['message'];
}
else {
	echo "Alhamdulillah berhasil";
}


