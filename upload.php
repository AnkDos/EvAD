<?php

define("UPLOAD_DIR", "/var/www/html/Event Resources/uploads/");
if(isset($_POST['btn'])) {
$myFile = $_FILES["myFile"];
if ($myFile["error"] !== UPLOAD_ERR_OK) {
echo "<p>An error occurred.</p>";
exit;
}
// ensure a safe filename
$name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
// don't overwrite an existing file
$i = 0;
$parts = pathinfo($name);
while (file_exists(UPLOAD_DIR . $name)) {
$i++;
$name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
}
// preserve file from temporary directory
$success = move_uploaded_file($myFile["tmp_name"],
UPLOAD_DIR . $name);
if (!$success) {
echo "<p>Unable to save file.</p>";
exit;
}

if($sucess)
{

echo "Uploaded Sucessfully";

}

// set proper permissions on the new file
chmod(UPLOAD_DIR . $name, 0644);
}


?>
<html>
<head>
</head>
<body>
<form  method="post" enctype="multipart/form-data">
<input type="file" name="myFile">
<button  type="submit" name='btn'>
</form>
</div>






</body>
<html>





















