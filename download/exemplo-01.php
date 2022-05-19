<?php 

$link = "https://99prod.s3.amazonaws.com/uploads/f1350adc-bdfd-43bf-b210-78d1919cbcf5/Google.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">