<?php
  if (file_exists('./config.php')) {
    
    include("./config.php");  // Here are the Variables (see config-example.php)
    
    $connection=mysql_connect($dbserver,$dbuser,$dbpass);
      mysql_select_db($dbname) or die ("<h1>0x001255</h1>");                                                                      
      if(!$connection)
      {
        die("<h1>0x001255</h1>");
      }                                            
      if(!mysql_select_db($dbname,$connection)) 
      {                                            
      	die("<h1>0x001255</h1>");			
      }
  }
  else {

?>

<h1>ERROR: NON EXISTENT DBCONFIG!</h1>

<?php
  }
?>
