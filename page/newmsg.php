<?php
$name = $_REQUEST["name"];
$inhalt = $_REQUEST["inhalt"];

include 'geoweb_db_open.php'; // g01_db.sqlite-Datenbank öffnen

// Daten in Tabelle feedback einfügen mit SQL-Befehl 
// INSERT INTO <tabelle> (felder, ...) VALUES (werte, ...) 
// Die Werte sind bei Textfelder in (einfache) Hochkomma zu setzen, 
// bei Zahlen ohne Hochkomma (hier nur bei teamflag)
// SQL-String zusammensetzen
$sql = "INSERT INTO blog (name,msg,datum)";
$sql = $sql . " VALUES ('" . $name . "','" . $inhalt . "','" . date("d-m-Y") . "')";

// SQL-String an Datenbank-Server schicken (Beispiel SQLite-Datenbank: 
$db->exec($sql) or die ('Fehler bei Speichern: '.$db->lastErrorMsg());

include 'geoweb_db_close.php'; // Datenbank schließen

header("Location: http://student.ifip.tuwien.ac.at/geoweb/2013/g01/page/index.php");
?>