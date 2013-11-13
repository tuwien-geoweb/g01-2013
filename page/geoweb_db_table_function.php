<?php
// Funktion: Abfrageergebnis in Html-Tabelle ausgeben

Function geoweb_db_table($result)
{
  echo "<table border='0'>";
  // Alle Zeilen ausgeben
  while ($zeile = $result->fetchArray(SQLITE3_NUM)) 
    {echo "<tr>";
     // Alle Spaltenwerte je Zeile ausgeben
     foreach ($zeile as $fld_val) 
       { echo "<td>$fld_val</td>"; }
     echo "</tr>\n";
    }
  echo "</table>";
}
?> 