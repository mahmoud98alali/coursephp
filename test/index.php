<?php

// $name = "Mahmoud";
// $age = 12;

//  echo "Are you". " "  . "$age ".  $name; 


// GET the variables is public put on links But when i ues POST this is very securty
$name = $_GET["name"];
$age = $_GET["age"];
$email = $_GET["email"];

echo $name;
echo "<br/>";
echo $age;
echo "<br/>";
echo $email;
?>
    