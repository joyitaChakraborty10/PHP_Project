<?php $pageTitle = $pageTitle ?? 'Aster & Moss'; $activePage = $activePage ?? ''; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aster & Moss — considered fragrance for a life well-lived.">
    <title><?= htmlspecialchars($pageTitle) ?> | Aster & Moss</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/site.css">
</head>
<body>
    <div class="announcement">Complimentary shipping on all orders over $150</div>
    <header class="nav">
        <a class="brand" href="index.php">aster <span>&amp;</span> moss</a>
        <nav class="nav-links" aria-label="Primary navigation">
            <a class="<?= $activePage === 'collection' ? 'active' : '' ?>" href="collection.php">Collection</a>
            <a class="<?= $activePage === 'story' ? 'active' : '' ?>" href="about.php">Our story</a>
            <a class="<?= $activePage === 'journal' ? 'active' : '' ?>" href="journal.php">Journal</a>
        </nav>
        <div class="nav-actions"><a class="nav-icon" href="contact.php" aria-label="Contact">Contact</a><a class="bag-link" href="bag.php">Bag <span>0</span></a></div>
    </header>