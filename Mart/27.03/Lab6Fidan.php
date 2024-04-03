<!DOCTYPE html>

<html>
<body>

<?php

$rows = 9;

$cols = 9;

echo("<table>");

for ($r=1; $r <=$rows; $r++) {

echo("<tr>");
for ($c=1; $c <=$cols; $c++)

{
echo('<td>'. "$c * $r = ". ($c*$r). "&emsp;". '</td>');

} echo('</tr>');

}

echo("</table>");

?>
</body> 
</html>