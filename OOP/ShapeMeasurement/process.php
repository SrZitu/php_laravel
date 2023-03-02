<?php
require_once "Circle.php";
require_once "Triangle.php";
require_once "Rectangle.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $shape = $_POST['shape'];
    $measurement = $_POST['measurement'];

    switch ($shape) {
        case 'circle':
            $circle = new Circle("Circle", $measurement);
            $area = $circle->getArea();
            break;
        case "rectangle":
            $rectangle = new Rectangle("Rectangle", $measurement, $measurement);
            $area = $rectangle->getArea();
            break;
        case "triangle":
            $Triangle = new Triangle("Triangle", $measurement, $measurement);
            $area = $Triangle->getArea();
            break;
        default:
            $area = "invalid shape selected";
            break;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP Project</title>
</head>

<body>
    <?php if (isset($area)) : ?>
        <h1><?php echo $shape; ?></h1>
        <p>Area: <?php echo $area; ?></p>
    <?php endif; ?>
</body>

</html>