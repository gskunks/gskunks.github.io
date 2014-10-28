 <?php
 $dir = "articles";

// Open a known directory, and proceed to read its contents
foreach(glob($dir) as $file) 
{
	echo file_get_contents($file, FILE_USE_INCLUDE_PATH). "<br />";
}
?>