<?php

// Turn on error reporting -- this is critical!
ini_set('display_errors',1);
error_reporting(E_ALL);

$name = $_POST["Name"];
$cupCake = $_POST["cupCake"];
$total = count($cupCake);
$newTotal = number_format($total*3.50, 2);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CupCake</title>
</head>
<body>

<h1>Confirmation</h1>

<?php

    //validation
    $isValid = true;



    echo "<p>Thank you, $name, for your order!</p><br>";

    echo "<p>Order Summary:</p>";
    foreach($cupCake as $flavor){
        echo "<p>• $flavor </p>";
    }

    echo "<p>Order Total: $$newTotal</p>";
?>
</body>
</html>