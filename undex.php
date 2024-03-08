<?php

require_once 'prodis.php';

$products = [
    new Product("Asmarelda", 18),
    new Product("Asla", 19),
    new Product("Aportani", 17),
    new Product("Portolka", 19),
    new Product("Loperla", 20)
];

?>

<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afah Iyah?</title>
</head>
<body>
    <h1>Prodikisi Namalika Balanda</h1>
    <ul>
    <?php foreach ($products as $product): ?>
    <li><?php echo $product->getInfo(); ?></li>
    <?php endforeach; ?>
    </ul>
    
</body>
</html>

