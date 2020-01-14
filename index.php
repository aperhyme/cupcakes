<?php

/**
 * Alex Grigorenko
 * 1/13/20
 * http://agrigorenko.greenriverdev.com/328/cupcakes/index.php
 * Form that allows you to select what cupcakes you would like to order
 */

    // Turn on error reporting -- this is critical!
    ini_set('display_errors',1);
    error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>cupcakes</title>
</head>
<body>
<!-- title container-->
<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="header text-center">
                <h1 class="text-uppercase">Cupcake Fundraiser</h1>
            </div>

        </div>
    </div>
</div>

<div class="container" id="main">

    <!-- Form Start -->
    <form id="vol-form" action="conformation.php" method="post">

    <fieldset class="form-group">
    <div class="row form-row">

        <!-- Name -->
        <div class="col-fill col-sm-4">
            <div class="form-group">
                <label for="Name">Name<span class="required"> * </span></label>
                <input type="text" class="form-control" id="Name" name="Name">
                <span id="err-Name" class="err"> Please enter your name</span>
            </div>
        </div>
    </div>
    </fieldset>

    <!-- associative array with the values of the different cupcake flavors -->
    <fieldset class="form-group">
    <div class="col-fill col-sm-4">
    <?php
    $cakeName = array("grasshopper" => "The Grasshopper", "maple" => "Whiskey Maple Bacon",
        "carrot" => "Carrot Walnut", "caramel" => "Salted Caramel Cupcake",
        "velvet" => "Red Velvet", "lemon" => "Lemon Drop", "tiramisu" => "Tiramisu");

        foreach ($cakeName as $key => $value){
            echo "<input class='form-check-input' type = 'checkbox' value= '$value' id='$key' name='cupCake[]'>";
            echo "<label class='form-check-label' for='$key'>$value</label><br>";
        }
    ?>
    </div>
    </fieldset>
     <!-- Submit button -->
    <button id="submit" type="submit" class="btn btn-primary"> Order</button>
    <form>
</div>




</body>
</html>