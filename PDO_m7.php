<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
   <?php 	
  try {
    $hostname = "localhost";
    $dbname = "world";
    $username = "ap";
    $pw = "Hakantor";
    $pdo = new PDO ("mysql:host=$hostname;dbname=$dbname","$username","$pw");
  } catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
  }

	?>
    	<?php
    	echo '<h1>Continent</h1>';
 		echo '<select>';
		foreach($pdo->query('SELECT Code,Continent FROM country') as $row) {
  		echo '<option value="'.$row['Code'].'">'.$row['Continent'].'<option/>';
		}
		echo '</select>';
      ?>
      <button>Enviar</button>
    </body>
</html>
