<?php 
function build($theFolder) {
	if ($contents = scandir($theFolder)) {
		$found = array();
		foreach ($contents as $item) {
			$fileInfo = pathInfo($item);
			$found[] = $item;
		}
	if ($found) {
		natcasesort($found);
		foreach ($found as $filename) {
			if( is_dir($filename) && $filename<>"."  && $filename<>".." ) {
				echo "<div class='col-lg-4'>";
				echo "<p>\n";
				echo "<a href='$filename' class='btn btn-warning btn-large'>$filename</a>\n";
				echo "</p>\n";
				echo "</div>\n";
			}
		}
	}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Three</title>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css" rel="stylesheet">
<link href="../main.css" rel="stylesheet">
<style>body{background: url('co-window.jpg') no-repeat center center fixed}</style>
</head>

<body>

<div class="container-narrow"> 

<div class="jumbotron">
	<h1>Three</h1>
</div>

	<div class="row">
		<?php build('./'); ?>
	</div>
	
	<div class="row marketing">
		<p><a class="btn btn-default" href="/">Local Dev</a></p>
	</div>

</div>
</body>
</html>