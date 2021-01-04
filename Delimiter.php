<!DOCTYPE html>
<html>
<head>
   
    <meta http-equiv="content-type" content = "text/html; charset = iso8859-1"/>
    <title>Converter</title>
</head>
<body>

<h1 align="center"> Converter</h1>

  <?php
  
  function converter($i){
	  $Celsius = round(($i - 32)*(5/9), 1);
	  return $Celsius;
  }
  for ($i= 1; $i<= 10; $i++){
		
	echo "F = ", converter($i), "<br/>";
	  }
  
	
  ?>
 
</body>
</html> 