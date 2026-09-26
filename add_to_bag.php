<?php
session_start();
require __DIR__ . '/includes/data.php';

$productId = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$action = $_POST['action'] ?? 'add';
$productExists = false;

foreach ($fragrances as $fragrance) {
    if ($fragrance['id'] === $productId) {
        $productExists = true;
        break;
    }
}

if ($productExists) {
    $_SESSION['cart'] ??= [];
    $_SESSION['cart'][$productId] = ($_SESSION['cart'][$productId] ?? 0) + 1;
}

if ($action === 'buy') {
    header('Location: bag.php?checkout=1');
} else {
    header('Location: bag.php?added=1');
}
exit;
?>
