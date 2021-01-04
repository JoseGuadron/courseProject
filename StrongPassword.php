<!DOCTYPE html>
<html>
<head>
   
    <meta http-equiv="content-type" content = "text/html; charset = iso8859-1"/>
    <title>Strong Password </title>
</head>
<body>
    
	
<?php

$Password = array ("NoDigitsOrOthers", "NoDigits...", "NoOthers999", "2 Spaces !", "0LOWERCASE?", "0uppercase+", "Sh0r+", "This1IsMuchTooLongForAPassword!", "1GoodPassword.", "GoodPassword2!");
$i = 0;
 For ($i=0; $i<=9;$i++){
	 
$lenght = strlen($Password[$i]);
echo " <strong>---------------------------------------------------------------------------------------------------------</strong>";
echo "<br>";
echo "Checking ''$Password[$i]''";
echo "<br>";
echo " <strong>______________________________________________________________________</strong>";
echo "<br>";


If(($lenght<=16)&&($lenght>=8)){
	
	$number = 0;

	 if( preg_match("/[a-z]+/", $Password[$i])==1){
			$number++;
		   }
		   else{
			  echo "Warning: ''$Password[$i]'' has no lowercase letter";
			  echo "<br>";
		
	  }
	  
	  if( preg_match("/[0-9]+/", $Password[$i])==1){
			$number++;
		   }
		   else{
			  echo "Warning: ''$Password[$i]'' has no numbers";
			  echo "<br>";
		 
	  }
	  
	  if( preg_match("/[A-Z]+/", $Password[$i])==1){

			$number++;
		   }
		   else{
			  echo "<br>";
			  echo "Warning: ''$Password[$i]'' has no uppercase letter";
			  echo "<br>";
		 
	  }
	       if( preg_match("/[\W]+/", $Password[$i])==1){

			$number++;
		   }
		   else{
			
			  echo "Warning: ''$Password[$i]'' has no non-alphanumeric characters";
			  echo "<br>";
		 
	  }
	     if( preg_match("/[\s]+/", $Password[$i])==1){
		  echo "Warning:''$Password[$i]''contains one or more space";
		    echo "<br>";
		   }
		   else{	  
			  $number++;			  
		   }	   
		   if ($number <5){
				    echo "''$Password[$i]'' is not a strong password";
	              echo"<br>";

			   }
				  else{
				  echo" ''$Password[$i]'' is a strong password";
	              echo"<br>";
				  }
		 
	  }
	else{
		
		
	echo  "Warning: ''$Password[$i]'' does not contain the lenght requirement (8-16 characters)";
	echo"<br>";
	echo "''$Password[$i]'' is not a strong password";
	echo"<br>";
	}

 }
?>
	
</body>
</html> 