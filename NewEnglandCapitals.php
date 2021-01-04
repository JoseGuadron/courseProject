<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Test</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
$Questions = array(
     "Week" => "7",
     "Favorite" => "Lasagna",
     "Best day of the week" => "Friday",
     "Where am i from?" => "Concord",
  
);
if (isset($_POST['submit'])) {
     $Answers = $_POST['answers'];
     if (is_array($Answers)) {
          foreach ($Answers as
               $State => $Response) {
               $Response =
                    stripslashes($Response);
               if (strlen($Response)>0) {
                    if (strcasecmp(
                         $Questions[$State],
                         $Response)==0)
                         echo "<p>Correct! The
                              capital of $State is " .
                              $StateCapitals[$State] .
                              ".</p>\n";
                    else
                         echo "<p>Sorry, the capital
                              of $State is not '" .
                              $Response . "'.</p>\n";
               }
               else
                    echo "<p>You did not enter a
                         value for the capital of
                         $State.</p>\n";
          }
     }
     echo "<p><a href='NewEnglandCapitals.php'>
          Try again?</a></p>\n";
}
else {
     echo "<form action='NewEnglandCapitals.php'
          method='POST'>\n";
     foreach ($Questions as
          $State => $Response)
          echo "The capital of $State is:
               <input type='text' name='answers[" .
               $State . "]' /><br />\n";
          echo "<input type='submit'
               name='submit'
               value='Check Answers' /> ";
          echo "<input type='reset' name='reset'
               value='Reset Form' />\n";
          echo "</form>\n";
}
?>
</body>
</html>

