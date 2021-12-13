<html>
<body>

<?php
$name = array("Sem", "Keith", "Jonas", "Youri");
sort($name);

$names = count($name);
for($x = 0; $x < $names; $x++) {
  echo $name[$x];
  echo "<br>";
}
?>

</body>
</html>
