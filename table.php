<!DOCTYPE html>
<html>
<head>
   
    <meta http-equiv="content-type" content = "text/html; charset = iso8859-1"/>
    <title>Table </title>
</head>
<body>
    
        
<table border="2" width="200px" height="200px" >
            <?php
            
			
            for ($row= 1;$row<=3;$row++){
				    echo "<tr>";
              
						 
           for ($col = 1; $col <=2; $col++){
                   
                    echo "<th>";
                    echo $col;
                    echo "</th>";
		   }
		    echo "</tr>";
            }
			
           
           
    ?> 
	
    </table>
	
	
</body>
</html> 