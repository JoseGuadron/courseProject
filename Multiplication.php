
	
	<!DOCTYPE html>
<html>
<head>
   
    <meta http-equiv="content-type" content = "text/html; charset = iso8859-1"/>
    <title>Multiplication Tables</title>

</head>
<body>
<!-- The is the way I tried to use blink in my project, but I couldnt.
<style>
@keyframes blink {
    50% {
        background: blue;
    }
}
.blink {
    animation-direction: normal;
    animation-duration: 0.5s;
    animation-iteration-count: infinite;
    animation-name: blink;
    animation-timing-function: linear;
}
</style>


<span class="blink"> Numbers</span>  
-->

<h2>Multiplication Tables</h2>

<table border="2" width="300px" height="300px" cellspacing="2px" cellpadding="8px" border="8px">
            <?php
			
			
            echo "<tr>";
            for ($numbers= 0;$numbers<=10;$numbers++){
                        echo "<th>";
                        echo $numbers;
                        echo "</th>";
            }
            echo "</tr>";
            for ($x = 1; $x <=10; $x++){
                    echo "<tr>";
                    echo "<th>";
                    echo $x;
                    echo "</th>";
            for ($y=1;$y<=10;$y++){                      
                    $multiplicacion=$x*$y;                    
                    echo "<td>";                      
                    echo $multiplicacion;                      
                    echo "</td>";  

                            }              
                    echo "</tr>";          
                    }      
    ?>      
	
    </table>
	


</body>
</html> 