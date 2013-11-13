<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../screen.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>    
    <title>GEOWEB 2013 - Gruppe 1</title>
</head>

<body>

<div id="container">
    
    <div id="header">
        <div id="header_content"></div>
    </div> <!--end header -->

    <div id="navi">
    	<nav>
        	<ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="#">Übungsaufgaben</a>
            	<ul>
                	<li><a href="#">Aufgabe 1</a></li>
                    <li><a href="#">Aufgabe 2</a></li>
                    <li><a href="#">Aufgabe 3</a></li>
                </ul>
            </li>
            <li><a href="#">Wohnstandortanalyse</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="../impressum.php">Impressum</a></li>
          </ul>
        </nav>     
    </div>

    <div id="content">
            
        <h1>Interner Bereich</h1>
        <p>&nbsp;</p>
        <table width="100%" border="0">
          <tr>
            <td width="75%" valign="top">
				<?php
                $beitrag = file("gaestebuch.txt");
                krsort($beitrag);
                
                foreach($beitrag as $ausgabe)
                   {
                   $ausgabe = stripslashes($ausgabe);
                   $zerlegen = utf8_decode(implode($b,""));
				   $zerlegen = explode("|", $ausgabe);				   
                
                   echo "
					<table align=\"center\"
					border=\"0\" cellspacing=\"0\"
					cellpadding=\"5\" bordercolorlight=\"black\"
					bordercolordark=\"black\" width=\"100%\">
					<tr>
					<td>
					Von $zerlegen[0]
					am $zerlegen[1]
					</td>
					</tr>
					
					<tr>
					<td>
					$zerlegen[2]
					</td>
					</tr>
					</table><br>
					";
					}
                ?>			
            </td>
                
            <td width="25%" align="right" valign="top">
            
                Neuen Eintrag erstellen:<br>
                <br>
            
                <form action="newmsg.php" Method="post">
                <p>Name:<br>
                <select name="Name" size="1">
                <option value="Wolfgang">Wolfgang</option>
                <option value="Tina">Tina</option>
                <option value="Vali">Vali</option>                
                </select>
                <br>
                <br>
                
                Inhalt:<br>
                
                <textarea name="inhalt" cols="20" rows="8" wrap="off"></textarea>
                </p>
                <p>                  <br>
                </p>
                <p>
                  <input type="submit" value="Absenden">
                </p>
              </form>
            </td>
          </tr>
        </table>
        
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <br>
                
  </div>

    <div id="footer">
    	<div id="footer_content">
          <p>VU Web-basierte Geoinformation im Planungsprozess 280.290 | Wintersemester 2013/14</p>
          <p>&copy; Gruppe 1 - Valentin Schalk, Wolfgang Niel, Christina Timmerer</p>
      	</div>
    </div> <!--end footer -->
     
</div> 
<!--end container -->

</body>
</html>
