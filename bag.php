<?php
session_start();
require __DIR__ . '/includes/data.php';

$pageTitle = 'Your Bag';
$activePage = 'bag';
$_SESSION['cart'] ??= [];
$orderPlaced = false;
$checkoutError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove_id'])) {
	$removeId = filter_input(INPUT_POST, 'remove_id', FILTER_VALIDATE_INT);
	unset($_SESSION['cart'][$removeId]);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['place_order'])) {
	$customerName = trim($_POST['customer_name'] ?? '');
	$customerEmail = trim($_POST['customer_email'] ?? '');
	$customerAddress = trim($_POST['customer_address'] ?? '');
	$paymentMethod = $_POST['payment_method'] ?? '';

	if (!$_SESSION['cart']) {
		$checkoutError = 'Your bag is empty. Add a fragrance before checking out.';
	} elseif ($customerName === '' || !filter_var($customerEmail, FILTER_VALIDATE_EMAIL) || $customerAddress === '' || !in_array($paymentMethod, ['card', 'upi', 'cod'], true)) {
		$checkoutError = 'Please complete your name, valid email, delivery address and payment method.';
	} else {
		$_SESSION['cart'] = [];
		$orderPlaced = true;
	}
}

$cartItems = [];
$subtotal = 0.00;
foreach ($fragrances as $fragrance) {
	$quantity = (int) ($_SESSION['cart'][$fragrance['id']] ?? 0);
	if ($quantity > 0) {
		$lineTotal = $fragrance['price'] * $quantity;
		$cartItems[] = ['product' => $fragrance, 'quantity' => $quantity, 'lineTotal' => $lineTotal];
		$subtotal += $lineTotal;
	}
}
$shipping = 0.00;
$total = $subtotal + $shipping;
$showCheckout = isset($_GET['checkout']) || isset($_POST['place_order']);

require __DIR__ . '/includes/header.php';
?>
<main>
	<section class="page-hero"><span class="eyebrow">Your edit</span><h1>Your bag.</h1><p>A quiet place for the scents you are thinking about.</p></section>
	<section class="page-wrap">
		<?php if ($orderPlaced): ?>
			<div class="order-confirmation"><span class="eyebrow">Order placed</span><h2>Thank you for your order.</h2><p>Your fragrance ritual is on its way. We have received your details and will send confirmation shortly.</p><a class="button" href="collection.php">Continue browsing &rarr;</a></div>
		<?php elseif (!$cartItems): ?>
			<div class="bag-layout"><div class="empty-bag"><span class="eyebrow">Nothing here yet</span><h2>Begin with a feeling.</h2><p>Explore the collection and your chosen fragrances will appear here.</p><a class="button" href="collection.php">Explore scents &rarr;</a></div><aside class="summary"><h2>Order summary</h2><div class="summary-row"><span>Subtotal</span><span><?= formatInr($subtotal) ?></span></div><div class="summary-row"><span>Shipping</span><span>Complimentary</span></div><div class="summary-row total"><span>Total</span><span><?= formatInr($total) ?></span></div></aside></div>
		<?php else: ?>
			<div class="bag-layout">
				<div class="cart-column">
					<?php if (isset($_GET['added'])): ?><div class="success">Fragrance added to your bag.</div><?php endif; ?>
					<?php if ($checkoutError): ?><div class="form-error"><?= htmlspecialchars($checkoutError) ?></div><?php endif; ?>
					<?php if (!$showCheckout): ?>
						<div class="cart-list">
							<?php foreach ($cartItems as $item): $product = $item['product']; ?>
								<article class="cart-item"><img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?> perfume"><div><span class="eyebrow"><?= htmlspecialchars($product['house']) ?></span><h2><?= htmlspecialchars($product['name']) ?></h2><p><?= $item['quantity'] ?> × <?= formatInr((float) $product['price']) ?></p></div><strong><?= formatInr((float) $item['lineTotal']) ?></strong><form method="post"><input type="hidden" name="remove_id" value="<?= $product['id'] ?>"><button class="remove-link" type="submit">Remove</button></form></article>
							<?php endforeach; ?>
						</div>
					<?php else: ?>
						<form class="checkout-form" method="post"><span class="eyebrow">Secure checkout</span><h2>Delivery details</h2><div class="field"><label for="customerName">Full name</label><input id="customerName" name="customer_name" required></div><div class="field"><label for="customerEmail">Email address</label><input id="customerEmail" name="customer_email" type="email" required></div><div class="field"><label for="customerAddress">Delivery address</label><textarea id="customerAddress" name="customer_address" required></textarea></div><div class="field"><label for="paymentMethod">Payment method</label><select id="paymentMethod" name="payment_method" required><option value="">Select payment option</option><option value="card">Credit / debit card</option><option value="upi">UPI</option><option value="cod">Cash on delivery</option></select></div><button class="button" name="place_order" type="submit">Place order · <?= formatInr($total) ?></button></form>
					<?php endif; ?>
				</div>
				<aside class="summary"><h2>Order summary</h2><?php foreach ($cartItems as $item): ?><div class="summary-row"><span><?= htmlspecialchars($item['product']['name']) ?> × <?= $item['quantity'] ?></span><span><?= formatInr((float) $item['lineTotal']) ?></span></div><?php endforeach; ?><div class="summary-row"><span>Shipping</span><span>Complimentary</span></div><div class="summary-row total"><span>Total</span><span><?= formatInr($total) ?></span></div><?php if (!$showCheckout): ?><a class="button" href="bag.php?checkout=1">Proceed to buy &rarr;</a><?php endif; ?></aside>
			</div>
		<?php endif; ?>
	</section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
