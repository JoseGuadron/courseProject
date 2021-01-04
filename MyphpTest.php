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
     "How many days a week have?" => "7",
     "Which is my favorite food?" => "Lasagna",
     "Which is the best day of the week?" => "Friday",
     "Where am i from?" => "El Salvador",
  
);
if (isset($_POST['submit'])) {
     $Answers = $_POST['answers'];
     if (is_array($Answers)) {
          foreach ($Answers as
               $Question => $Response) {
               $Response =
                    stripslashes($Response);
               if (strlen($Response)>0) {
                    if (strcasecmp(
                         $Questions[$Question],
                         $Response)==0)
                         echo "<p>Correct! The correct answers of $Question is " .
                              $Questions[$Question] .
                              ".</p>\n";
                    else
                         echo "<p>Sorry, the capital
                              of $Question is not '" .
                              $Response . "'.</p>\n";
               }
               else
                    echo "<p>You did not enter a
                         value for the capital of
                         $Question.</p>\n";
          }
     }
     echo "<p><a href='MyphpTest.php'>
          Try again?</a></p>\n";
}
else {
     echo "<form action='MyphpTest.php'
          method='POST'>\n";


     foreach ($Questions as
          $Question => $Response)
          echo "The answer of $Question  is:
               <input type='text' name='answers[" .
               $Question . "]' /><br />\n";
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

