<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="screen.css">
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
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Übungsaufgaben</a>
            	<ul>
                	<li><a href="#">Aufgabe 1</a></li>
                    <li><a href="#">Aufgabe 2</a></li>
                    <li><a href="#">Aufgabe 3</a></li>
                </ul>
            </li>
            <li><a href="#">Wohnstandortanalyse</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="impressum.php">Impressum</a></li>
          </ul>
        </nav>     
    </div>

    <div id="content">       
    
        <h1>Impressum</h1>
        
        <p>&nbsp;</p>
		
        <form class="feedback" method="POST" action="feedback_send.php">
          
          <p>
            <input type="radio" name="geschlecht" value="Frau"/> 
            Frau
            <input type="radio" name="geschlecht" value="Herr"/> 
          Herr</p>
          <table>
            <tr><td>Name:</td>
               <td><input type="text" name="name" size="50" /></td>
            </tr>
            <tr><td>E-Mail: </td>
               <td><input type="text" name="email" size="50" /></td>
            </tr>
          </table>
          <p>Feedback: <br />
            <textarea name="message" rows="10" cols="50"></textarea>
            <br />
            <input type="checkbox" name="team" checked="checked" value="ON" />
                 Ich bin Mitglied des geoweb-Teams <br />
                 <br />
          <table>
            <tr><td>Latitude: </td>
               <td><input type="text" name="lat" size="50" /></td>
            </tr>
            <tr><td>Longitude: </td>
               <td><input type="text" name="lon" size="50" /></td>
            </tr>
          </table>                 
          <p>&nbsp;          </p>
            <p>
            <input type="submit" value="Abschicken">
            <input type="reset" value="Zurücksetzen"> 
            <br />
            <br />
          Ihr Feedback wird per E-Mail an die Autoren/innen zugestellt<br>
          und in der Projekt-Datenbank gespeichert.
          </p>
              </p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p><br />
          </p>
        </form>
    </div> <!--end content -->
    
    <div id="footer">
    	<div id="footer_content">
          <p>VU Web-basierte Geoinformation im Planungsprozess 280.290 | Wintersemester 2013/14</p>
          <p>&copy; Gruppe 1 - Valentin Schalk, Wolfgang Niel, Christina Timmerer | <a href="intranet/intranet.php">Intranet</a></p>
      	</div>
    </div> <!--end footer -->
</div> 
<!--end container -->

</body>
</html>
