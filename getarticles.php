 <?php
 $dir = "articles/";

// Open a known directory, and proceed to read its contents
 /*
foreach(glob($dir) as $file) 
{	
	$thing = file_get_contents($file);
	echo $thing . "<br />";
}*/
$articles="";
$files2 = scandir($dir, 1);
$limit = sizeof($files2)-2;
for($x=0; $x<$limit; $x++) {
	$articles = $articles . file_get_contents($dir.$files2[$x]) . "<br/>\r\n\r\n\r\n";
}
echo $articles;
?>