<!DOCTYPE html>
<html>
<body>

<?php
$adress = array (
  array("Bosweg 44","swaen",31679342534,"perkal@gmail.com"),
  array("Bosweg 44","swaen",31679342534,"perkal@gmail.com"),
  array("Bosweg 44","swaen",31679342534,"perkal@gmail.com"),
  array("Bosweg 44","swaen",3179342534,"perkal@gmail.com"),
  array("Bosweg 44","swaen",3179342534,"perkal@gmail.com"),
  array("Bosweg 44","swaen",3179342534,"perkal@gmail.com")
);
    
for ($row = 1; $row < 6; $row++) {
  echo "<p><b>Blok $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 4; $col++) {
    echo "<li>".$adress[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>

</body>
</html>

