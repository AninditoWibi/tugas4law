<?php
	$target_dir = "Shared Storage/";
	// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$target_dir_withFile = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadStatus = false;
	if (isset($_POST["submit"])) {
		move_uploaded_file( $_FILES['fileToUpload']['tmp_name'], $target_dir_withFile );
		$uploadStatus = true;
	}

	$file = $_FILES["fileToUpload"];

	$c = curl_init();
	curl_setopt($c, CURLOPT_URL, "http://127.0.0.1:2000/Shared Storage/");
	curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($c, CURLOPT_PUT, true);
	curl_setopt($c, CURLOPT_INFILESIZE, filesize($file));

	$fp = fopen($file, "r");
	curl_setopt($c, CURLOPT_INFILE, $fp);

	curl_exec($c);

	curl_close($c);
	fclose($fp); 
?>

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
		<div id="div1" style="margin-left: 30px;">
			<h1>Tugas 4 LAW - Uploader Frontend</h1>
			<p>
				<!-- <?php
					$target_dir_withFile = "Shared Storage/" . basename($_FILES["fileToUpload"]["name"]);
					if (file_exists($target_dir_withFile)) {
						echo "File uploaded successfully.";
					} else {
						echo "An error has occured.";
					}
				?> -->
				Upload attempt initiated.
			</p>
		</div>
	</body>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</html>