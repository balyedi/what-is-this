<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1257">
	<title>About "what is this" folder</title>
</head>
<body style="text-align: center;">
	<h1>About "what is this" folder</h1>
	<p>this is a folder that store things i loved</p>
	<p>that can be anything! (except NSFW)</p><br>
	<h2>why are you maked that?</h2>
	<p>I wanted to archive things</p><br>
	<h1>my best folder</h1>
	<img src="https://media.discordapp.net/attachments/754974596741988462/780570935412916294/loadcat.gif"><br>
	<style>
	.file:hover {
		font-size: 21px;
	}
	</style>
<?php
error_reporting(0);
function getSubDirectories($dir)
{
    $subDir = array();
    $directories = array_filter(glob($dir), 'is_dir');
    $subDir = array_merge($subDir, $directories);
    foreach ($directories as $directory) $subDir = array_merge($subDir, getSubDirectories($directory.'/*'));
    return $subDir;
}
$proje['../ballyedi.atwebpages.com/project/memecreator'] = "Meme Creator";
$proje['../ballyedi.atwebpages.com/project/bsearch'] = "Bsearch";
		$content = scandir(".");
		if(isset($_GET['search'])) {
			foreach($content as $folder) {
				if(strpos($folder, $_GET['search']) !== false) {
					echo '	<a href="'.$folder.'" style="cursor: pointer;" class="file">'.$folder."</a>&nbsp;\n";
				}
			}
		} else {
			foreach($content as $folder) {
				echo '	<a href="'.$folder.'" style="cursor: pointer;" class="file">'.$folder."</a>&nbsp;\n";
			}
		}
		?>
</body>
</html>