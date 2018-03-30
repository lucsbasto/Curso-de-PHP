<?php
$filename = "5039.jpg";
$base64 = base64_encode(file_get_contents($filename));
$fileinfo = new finfo(FILEINFO_MIME_TYPE);
$mime = $fileinfo->file($filename);

$data = "data:$mime;base64,$base64";
?>

<a href="<?=$data?>" target="blank">LINK</a>
<img src="<?=$data?>">
