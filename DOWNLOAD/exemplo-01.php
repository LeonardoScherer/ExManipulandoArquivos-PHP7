<?php 

$link = "https://www.google.com/logos/doodles/2021/amacio-mazzaropis-109th-birthday-6753651837108343.2-l.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">