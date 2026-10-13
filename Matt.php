<?php
require 'schoolmaterials.php';

$matt1 = new Schoolmaterials();
$matt1->set_details('Notebook', 45);
echo $matt1->get_details();
echo "<br>";

$matt2 = new Schoolmaterials();
$matt2->set_details('Ballpen', 12);
echo $matt2->get_details();
echo "<br>";

$matt3 = new Schoolmaterials();
$matt3->set_details('Backpack', 850);
echo $matt3->get_details();
echo "<br>";
?>