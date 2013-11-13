<html>
<head>
<title>Gästebuch - Speichere Beitrag</title>
</head>
<body>

<?php
$user = $_POST["Name"];
$user = htmlentities($user);

$inhalt = $_POST["inhalt"];
$inhalt = htmlentities($inhalt);
$inhalt = str_replace("\n", "<br>", $inhalt);

if ($inhalt == "" or $user == "")
   {
   echo "Sie müssen das Feld \"Namen\"
   und \"Inhalt\" ausfüllen";
   }

else
   {
   $datum= date("d.m.Y H:i");

   $eintrag="$user|$datum|$inhalt";

   $datei = fopen("gaestebuch.txt", "a");
   fwrite($datei, "\n".$eintrag);
   fclose($datei);

	header("Location: http://student.ifip.tuwien.ac.at/geoweb/2013/g01/page/intranet/intranet.php");
   }
?>

<br>
<a href="gaestebuch.php">Zurück zum Gästebuch</a>
</body>
</html>