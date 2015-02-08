<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
copy($_FILES['myAudioFile']['tmp_name'],$_FILES['myAudioFile']['name']);
echo "El audio se registro en el servidor.<br>";
$nom=$_FILES['myAudioFile']['name'];
echo "<img src=\"$nom\">";
?>
</body>
</html>