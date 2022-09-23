<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>lab6.5</title>
</head>
<body>
<?php
class ClaseBase {
public function test() {
echo "ClaseBase::test() llamada\n";
}
final public function masTests() {
echo "ClaseBase::masTests() llamada\n";
}
}
class ClaseHijo extends ClaseBase {
public function masTests() {
echo "ClaseHijo::masTests() llamada\n";
}
}
?>
</body>
</html>