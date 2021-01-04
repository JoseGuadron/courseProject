<!DOCTYPE html>
<html>
<head>
   
    <meta http-equiv="content-type" content = "text/html; charset = iso8859-1"/>
    <title>Zodiac Calendar</title>
</head>
<body>
<style>
h2 {
    text-align: center;
	color: red;
	font-family: algerian;
}
Table {
	text-align: center;
}
</style>
<h2>Zodiac Calendar</h2>

<div id="table">
<?php

$StartDate = 1912;
$ActualDate = 2019;
$ZodiacAnimals = array("Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Sheep", "Monkey", "Rooster", "Dog", "Pig");

//Table
echo "<table>", "<tr>";

for ($row = 0; $row < 12; ++$row) {
    echo "<th>",$ZodiacAnimals[$row],"</th>";
}

echo "</tr>", "<tr>";

for ($row = 0; $row < 12; ++$row) {
    echo "<td>","<img src='./images/",$ZodiacAnimals[$row],".gif'/>", "</td>";
}

echo "</tr>";


$row = $StartDate;
while ($row <= $ActualDate) {
    if ((($row-$StartDate) % 12) == 0) {
        echo "<tr>", "</tr>";
    }
        echo "<td>",$row,"</td>";
            $row++;
}

echo "</tr>", "</table>";
?>
</div>
</body>
</html> 