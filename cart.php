<?php
// Restrict access to the page with redirection.
session_start();

if (!isset($_SESSION['name'])) {
    header('location: login.php');
}

require 'inc/data/products.php';
require 'inc/head.php';

var_dump($_SESSION['cart']);
?>

<section class="cookies container-fluid">
    Display shopping cart items from $_SESSION here: 
    <br><br>
    <ul><?php
        foreach ($_SESSION['cart'] as $productID) {
            echo "<li>" . $catalog[$productID]['name'] . "<li>";
        }
    ?></ul>
</section>
<?php require 'inc/foot.php'; ?>