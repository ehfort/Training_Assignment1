<?php
date_default_timezone_set("America/New_York");

// Ordered at [date]
// Type:
// Condiments: a, b, c
// Toppings: a, b, c
// Cheese: American or Provolone
// Add Fries/No Fries

$mealItem;
if ($_POST["entree"] === "burgsand") {
    $mealItem = $_POST["type-burgsand"];
}
else { // wrap
    $mealItem = $_POST["type-wrap"];
}

echo("<h1 style='margin:0;'>New Order - " . date("m/d/Y") . " - " . $_POST["name"] . " at " . date("h:i:sa") . "</h1>");
echo("<h2 style='margin:0;'><strong>" . $mealItem . "</strong></h2>");
echo("<p style='margin:0;'><strong>Condiments: </strong>");
for ($i = 0; $i < count($_POST["condiment"]) - 1; $i++) {
    echo($_POST["condiment"][$i] . ", ");
}
echo("and " . $_POST["condiment"][count($_POST["condiment"]) - 1] . "</p>");

echo("<p style='margin:0;'><strong>Toppings: </strong>");
for ($i = 0; $i < count($_POST["topping"]) - 1; $i++) {
    echo($_POST["topping"][$i] . ", ");
}
echo("and " . $_POST["topping"][count($_POST["topping"]) - 1] . "</p>");
echo("<p style='margin:0;'><strong>Cheese: </strong>" . $_POST["cheese"] . "</p>");

echo("<p style='margin:0;'>");
if($_POST["fries"] === "yes") {
    echo("With fries</p>");
}
else {
    echo("No fries</p>");
}
