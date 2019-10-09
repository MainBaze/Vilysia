<?php

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "contact@mre.design";
$headers = "From: ".$mailFrom;
$txt = "Application from ".$name.".\n\n".$message;

mail($mailTo, $txt, $headers);
header("Location: apply.html?mailsend");
}
?>