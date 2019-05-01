<html lang="en">
<head>
	<title>Tugas 4 LAW</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
	<body>
		<div style="margin-left: 30px;">
			<div id="div2">
				<h1>Tugas 4 LAW - Downloader Frontend</h1>
				<p> List of existing files in shared storage (click on link to download corresponding file; requires HTML5 support): <br><br>
				<ul>
				<?php
					$target_dir = ""; #????
					$listOfExistingFiles = array_diff(scandir($target_dir), array('..', '.'));
					$listOfExistingFilenames = array_map('basename', $listOfExistingFiles);
					foreach ($listOfExistingFilenames as $file) {
						//echo $file . '<br>';
						echo "<li><a href='" . $target_dir . $file . "' download>". $file . "</a></li>";
				}?>
				</ul>
				</p>
			</div>
		</div>
	</body>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</html>