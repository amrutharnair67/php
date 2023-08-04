<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);
$jsonobj=json_encode($age);
var_dump(json_decode($jsonobj));
?>

</body>
</html>