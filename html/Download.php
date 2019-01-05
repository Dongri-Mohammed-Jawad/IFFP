<?php
ob_start();
$fileName = 'IFFPReport.ppsx';
header("Cache-Control: private");
//header("Content-type: audio/mpeg3");
header("Content-Transfer-Encoding: binary");
header("Content-Disposition: attachment; filename=".$fileName);
readfile($fileName);
header("refresh:0.001;url=index.php");
?>
