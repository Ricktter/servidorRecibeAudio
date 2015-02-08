<html>
<head>
<title>RecibiendoAudio</title>
</head>
<body>
<?php
copy($_FILES['myAudioFile']['tmp_name'],$_FILES['myAudioFile']['name']);
echo "El audio se registro en el servidor.<br>";

?>
</body>
</html>