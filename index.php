<?php
session_start();
require __DIR__ . '/includes/data.php';
$fragrances = [
    [
        'name' => 'Santal 33',
        'house' => 'Le Labo',
        'category' => 'Woody',
        'price' => 19090,
        'size' => '50 ml / 1.7 fl oz',
        'image' => 'https://images.unsplash.com/photo-1547887538-e3a2f32cb1cc?auto=format&fit=crop&w=900&q=85',
        'description' => 'A smoky, warm composition where Australian sandalwood meets cedarwood and a trace of spice.',
        'notes' => ['Sandalwood', 'Cedarwood', 'Cardamom'],
        'accent' => '#b9a28b'
    ],
    [
        'name' => 'Another 13',
        'house' => 'Le Labo',
        'category' => 'Musk',
        'price' => 19090,
        'size' => '50 ml / 1.7 fl oz',
        'image' => 'https://images.unsplash.com/photo-1594035910387-fea47794261f?auto=format&fit=crop&w=900&q=85',
        'description' => 'An addictive halo of ambrette, moss and jasmine that lingers close to the skin.',
        'notes' => ['Ambrette', 'Moss', 'Jasmine'],
        'accent' => '#cab8a4'
    ],
    [
        'name' => 'Gypsy Water',
        'house' => 'Byredo',
        'category' => 'Fresh',
        'price' => 18675,
        'size' => '50 ml / 1.7 fl oz',
        'image' => 'https://images.unsplash.com/photo-1615634260167-c8cdede054de?auto=format&fit=crop&w=900&q=85',
        'description' => 'A fresh and woody fragrance inspired by colourful Romani nights and Nordic forests.',
        'notes' => ['Bergamot', 'Juniper', 'Pine needles'],
        'accent' => '#aebaa7'
    ],
    [
        'name' => 'Mojave Ghost',
        'house' => 'Byredo',
        'category' => 'Floral',
        'price' => 18675,
        'size' => '50 ml / 1.7 fl oz',
        'image' => 'https://images.unsplash.com/photo-1592945403244-b3fbafd7f539?auto=format&fit=crop&w=900&q=85',
        'description' => 'A desert bloom with powdery violet, magnolia and sandalwood, soft as sun-warmed air.',
        'notes' => ['Ambrette', 'Violet', 'Sandalwood'],
        'accent' => '#c7b8ad'
    ],
    [
        'name' => 'Bal d’Afrique',
        'house' => 'Byredo',
        'category' => 'Floral',
        'price' => 18675,
        'size' => '50 ml / 1.7 fl oz',
        'image' => 'https://images.unsplash.com/photo-1587017539504-67cfbddac569?auto=format&fit=crop&w=900&q=85',
        'description' => 'A joyful, sophisticated blend of neroli and marigold warmed by cedar and vetiver.',
        'notes' => ['Neroli', 'Marigold', 'Vetiver'],
        'accent' => '#d8b486'
    ],
    [
        'name' => 'Thé Noir 29',
        'house' => 'Le Labo',
        'category' => 'Woody',
        'price' => 19090,
        'size' => '50 ml / 1.7 fl oz',
        'image' => 'https://images.unsplash.com/photo-1594035910387-fea47794261f?auto=format&fit=crop&w=900&q=85',
        'description' => 'Black tea leaves and dry fig meet bergamot, bay leaf and a slow, smoky base.',
        'notes' => ['Black tea', 'Fig', 'Bay leaf'],
        'accent' => '#a9a58d'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aster & Moss — considered fragrance for a life well-lived.">
    <title>Aster & Moss | Considered Fragrance</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Source+Sans+3:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root { --ink: #1f2b35; --muted: #6e7476; --paper: #f5f3ee; --line: #d9d3c9; --sage: #59746f; --sand: #c79f63; --wine: #6b3945; --blue: #a9c4cc; --white: #fffdf8; }
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { margin: 0; color: var(--ink); background: var(--paper); font-family: 'Source Sans 3', sans-serif; font-size: 14px; }
        a { color: inherit; text-decoration: none; }
        button, input { font: inherit; }
        button { cursor: pointer; }
        .announcement { background: var(--wine); color: #fffaf5; text-align: center; padding: 10px 20px; font-size: 10px; letter-spacing: .17em; text-transform: uppercase; }
        .nav { align-items: center; display: flex; justify-content: space-between; max-width: 1320px; margin: auto; padding: 27px 42px; }
        .brand { font-family: 'Cormorant Garamond', serif; font-size: 29px; font-weight: 600; letter-spacing: -.04em; }
        .brand span { color: var(--sand); }
        .nav-links { display: flex; gap: 32px; margin-left: 55px; }
        .nav-links a { color: #656860; font-size: 11px; letter-spacing: .13em; text-transform: uppercase; }
        .nav-links a:hover { color: var(--ink); }
        .nav-actions { align-items: center; display: flex; gap: 19px; }
        .nav-icon { background: none; border: 0; color: var(--ink); padding: 4px; position: relative; }
        .nav-icon svg { display: block; height: 19px; width: 19px; }
        .bag-count { align-items: center; background: var(--sage); border-radius: 50%; color: white; display: flex; font-size: 9px; height: 16px; justify-content: center; position: absolute; right: -5px; top: -7px; width: 16px; }
        .hero { display: grid; grid-template-columns: 48% 52%; margin: 0 auto; max-width: 1320px; min-height: 610px; padding: 0 42px 58px; }
        .hero-copy { align-self: center; padding: 30px 7% 30px 8%; }
        .eyebrow { color: var(--sage); font-size: 10px; font-weight: 600; letter-spacing: .21em; text-transform: uppercase; }
        h1, h2, h3 { font-family: 'Cormorant Garamond', serif; font-weight: 600; }
        h1 { font-size: clamp(52px, 6.3vw, 90px); letter-spacing: -.065em; line-height: .96; margin: 23px 0 27px; max-width: 530px; }
        .hero-copy p { color: var(--muted); font-size: 15px; line-height: 1.8; margin: 0 0 32px; max-width: 370px; }
        .button { align-items: center; background: var(--ink); border: 1px solid var(--ink); color: white; display: inline-flex; font-size: 10px; gap: 20px; letter-spacing: .15em; padding: 16px 20px; text-transform: uppercase; transition: background .2s, color .2s; }
        .button:hover { background: transparent; color: var(--ink); }
        .button svg { height: 15px; width: 15px; }
        .hero-image { background: #ded5c6; min-height: 510px; overflow: hidden; position: relative; }
        .hero-image img { height: 100%; object-fit: cover; object-position: center; width: 100%; }
        .hero-label { background: var(--white); bottom: 0; left: 0; padding: 21px 25px; position: absolute; width: 210px; }
        .hero-label strong { display: block; font-family: 'Playfair Display', serif; font-size: 21px; font-weight: 500; margin-bottom: 4px; }
        .hero-label small { color: var(--muted); font-size: 10px; letter-spacing: .08em; text-transform: uppercase; }
        .intro-band { align-items: center; background: #e9e9e1; display: flex; justify-content: space-between; padding: 27px max(42px, calc((100% - 1236px) / 2)); }
        .intro-band p { color: #62685e; font-family: 'Playfair Display', serif; font-size: 20px; margin: 0; max-width: 520px; }
        .intro-band span { color: #7c8179; font-size: 10px; letter-spacing: .16em; text-transform: uppercase; }
        .shop { margin: auto; max-width: 1320px; padding: 105px 42px 115px; }
        .section-heading { align-items: end; display: flex; justify-content: space-between; margin-bottom: 38px; }
        h2 { font-size: 46px; letter-spacing: -.05em; margin: 11px 0 0; }
        .filters { display: flex; gap: 23px; }
        .filter { background: none; border: 0; color: var(--muted); font-size: 10px; letter-spacing: .13em; padding: 7px 0; text-transform: uppercase; }
        .filter.active, .filter:hover { border-bottom: 1px solid var(--ink); color: var(--ink); }
        .product-grid { display: grid; gap: 34px 18px; grid-template-columns: repeat(3, 1fr); }
        .product-card { min-width: 0; }
        .product-visual { background: #e4dfd6; height: 408px; overflow: hidden; position: relative; }
        .product-visual img { height: 100%; object-fit: cover; transition: transform .55s ease; width: 100%; }
        .product-card:hover .product-visual img { transform: scale(1.045); }
        .product-tag { background: var(--white); color: var(--sage); font-size: 9px; left: 15px; letter-spacing: .14em; padding: 8px 10px; position: absolute; text-transform: uppercase; top: 15px; }
        .quick-view { background: var(--white); border: 0; bottom: 14px; color: var(--ink); font-size: 10px; left: 14px; letter-spacing: .12em; opacity: 0; padding: 13px 16px; position: absolute; text-transform: uppercase; transform: translateY(7px); transition: opacity .25s, transform .25s; }
        .product-card:hover .quick-view { opacity: 1; transform: translateY(0); }
        .product-meta { padding: 18px 1px 0; }
        .product-meta h3 { font-size: 23px; margin: 0 0 5px; }
        .product-meta h3 span { color: var(--muted); font-family: 'DM Sans', sans-serif; font-size: 10px; letter-spacing: .14em; margin-left: 8px; text-transform: uppercase; }
        .product-meta p { color: var(--muted); font-size: 12px; line-height: 1.6; margin: 0 0 12px; max-width: 300px; }
        .product-bottom { align-items: center; display: flex; justify-content: space-between; }
        .price { font-size: 12px; }
        .notes { display: flex; gap: 5px; }
        .note { border: 1px solid var(--line); color: #81847c; font-size: 9px; padding: 5px 7px; }
        .story { background: #d8ddd5; display: grid; grid-template-columns: 42% 58%; min-height: 535px; }
        .story-photo { background: url('https://images.unsplash.com/photo-1556229010-6c3f2c9ca5f8?auto=format&fit=crop&w=1200&q=85') center/cover; min-height: 420px; }
        .story-copy { align-self: center; max-width: 580px; padding: 70px 12%; }
        .story-copy h2 { font-size: 50px; max-width: 390px; }
        .story-copy p { color: #5d665c; line-height: 1.85; max-width: 430px; }
        .text-link { border-bottom: 1px solid var(--ink); display: inline-block; font-size: 10px; letter-spacing: .14em; margin-top: 17px; padding-bottom: 8px; text-transform: uppercase; }
        .ritual { margin: auto; max-width: 1320px; padding: 110px 42px; text-align: center; }
        .ritual h2 { margin-bottom: 53px; }
        .ritual-grid { display: grid; grid-template-columns: repeat(3, 1fr); }
        .ritual-step { border-right: 1px solid var(--line); padding: 10px 9%; }
        .ritual-step:last-child { border: 0; }
        .ritual-number { color: var(--sand); font-family: 'Playfair Display', serif; font-size: 42px; }
        .ritual-step h3 { font-size: 22px; margin: 13px 0 8px; }
        .ritual-step p { color: var(--muted); font-size: 12px; line-height: 1.7; margin: 0; }
        .newsletter { align-items: center; background: var(--ink); color: var(--white); display: flex; justify-content: space-between; padding: 54px max(42px, calc((100% - 1236px) / 2)); }
        .newsletter h2 { font-size: 34px; margin: 0 0 8px; }
        .newsletter p { color: #b9bcb3; font-size: 12px; margin: 0; }
        .signup { border-bottom: 1px solid #797f75; display: flex; min-width: 330px; }
        .signup input { background: none; border: 0; color: white; outline: 0; padding: 13px 0; width: 100%; }
        .signup input::placeholder { color: #92978c; }
        .signup button { background: none; border: 0; color: white; font-size: 10px; letter-spacing: .12em; text-transform: uppercase; }
        footer { align-items: center; display: flex; justify-content: space-between; margin: auto; max-width: 1320px; padding: 30px 42px; }
        footer small { color: var(--muted); font-size: 10px; }
        .footer-links { display: flex; gap: 23px; }
        .footer-links a { color: var(--muted); font-size: 10px; letter-spacing: .08em; text-transform: uppercase; }
        .modal-backdrop { align-items: center; background: rgba(32,35,31,.55); display: none; inset: 0; justify-content: center; padding: 20px; position: fixed; z-index: 10; }
        .modal-backdrop.open { display: flex; }
        .modal { background: var(--paper); display: grid; grid-template-columns: 43% 57%; max-width: 740px; position: relative; width: 100%; }
        .modal img { height: 100%; min-height: 430px; object-fit: cover; width: 100%; }
        .modal-copy { padding: 55px 42px; }
        .modal-copy h2 { font-size: 40px; margin: 12px 0; }
        .modal-copy p { color: var(--muted); line-height: 1.75; }
        .modal-copy .notes { margin: 22px 0 30px; }
        .modal-close { background: none; border: 0; font-size: 24px; position: absolute; right: 16px; top: 13px; }
        @media (max-width: 800px) { .nav { padding: 22px 20px; } .nav-links { display: none; } .hero { display: flex; flex-direction: column-reverse; padding: 0 20px 45px; } .hero-image { min-height: 440px; } .hero-copy { padding: 48px 10px 15px; } .intro-band { align-items: flex-start; flex-direction: column; gap: 16px; padding: 23px 20px; } .shop, .ritual { padding: 72px 20px; } .section-heading { align-items: flex-start; flex-direction: column; gap: 26px; } .product-grid { grid-template-columns: 1fr; } .product-visual { height: 420px; } .quick-view { opacity: 1; transform: none; } .story { display: block; } .story-photo { min-height: 330px; } .story-copy { padding: 62px 20px; } .story-copy h2 { font-size: 42px; } .ritual-grid { gap: 35px; grid-template-columns: 1fr; } .ritual-step { border: 0; padding: 0 12%; } .newsletter { align-items: flex-start; flex-direction: column; gap: 30px; padding: 48px 20px; } .signup { min-width: 0; width: 100%; } footer { align-items: flex-start; flex-direction: column; gap: 22px; padding: 28px 20px; } .modal { grid-template-columns: 1fr; max-height: 90vh; overflow: auto; } .modal img { min-height: 240px; height: 240px; } .modal-copy { padding: 30px; } }
        .announcement { background: var(--wine); color: #fffaf5; }
        .hero-image, .product-visual { background: #e9e2d7; }
        .intro-band { background: #e1ebe8; }
        .product-tag { color: var(--wine); }
        .note { background: rgba(169,196,204,.16); border-color: #c8d8da; color: #5a6f75; }
        .story { background: #e5ece8; }
        .text-link { border-color: var(--wine); color: var(--wine); }
        .button { background: var(--wine); border-color: var(--wine); }
        .button:hover { color: var(--wine); }
        .product-actions { display: flex; gap: 6px; }
        .product-actions button { background: transparent; border: 1px solid var(--wine); color: var(--wine); font-size: 10px; letter-spacing: .1em; padding: 7px 9px; }
        .product-actions button:hover { background: var(--wine); color: white; }
        .modal-actions { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 28px; }
        .modal-actions .button { margin-top: 0; }
        .modal-actions .secondary { background: transparent; color: var(--wine); }
    </style>
</head>
<body>
    <div class="announcement">Complimentary shipping on all orders over $150</div>
    <header class="nav">
        <a class="brand" href="#top">aster <span>&</span> moss</a>
        <nav class="nav-links" aria-label="Primary navigation"><a href="collection.php">Collection</a><a href="about.php">Our story</a><a href="journal.php">Journal</a></nav>
        <div class="nav-actions">
            <button class="nav-icon" aria-label="Search"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="6.5"/><path d="m16 16 5 5"/></svg></button>
            <a class="nav-icon" href="bag.php" aria-label="Shopping bag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M5 8.5h14l-1 12H6l-1-12Z"/><path d="M9 9V6a3 3 0 0 1 6 0v3"/></svg><span class="bag-count" id="bagCount"><?= array_sum($_SESSION['cart'] ?? []) ?></span></a>
        </div>
    </header>
    <main id="top">
        <section class="hero">
            <div class="hero-copy"><span class="eyebrow">The art of wearing scent</span><h1>Find the note that feels like you.</h1><p>Quietly expressive fragrances for the moments you want to remember. Composed with intention, worn with ease.</p><a class="button" href="#shop">Explore the collection <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
            <div class="hero-image"><img src="https://images.unsplash.com/photo-1595425970377-c9703cf48b6d?auto=format&fit=crop&w=1200&q=90" alt="A perfume bottle resting beside a sculptural vase"><div class="hero-label"><strong>Skin / scent / story</strong><small>New season, softly spoken</small></div></div>
        </section>
        <div class="intro-band"><p>Fragrance is an invisible part of the way we introduce ourselves.</p><span>Made for every day</span></div>
        <section class="shop" id="shop">
            <div class="section-heading"><div><span class="eyebrow">The edit</span><h2>Signature scents</h2></div><div class="filters" role="group" aria-label="Filter fragrances"><button class="filter active" data-filter="All">All</button><button class="filter" data-filter="Woody">Woody</button><button class="filter" data-filter="Floral">Floral</button><button class="filter" data-filter="Fresh">Fresh</button></div></div>
            <div class="product-grid" id="productGrid">
                <?php foreach ($fragrances as $index => $fragrance): ?>
                    <article class="product-card" data-category="<?= htmlspecialchars($fragrance['category']) ?>" data-index="<?= $index ?>">
                        <div class="product-visual"><img src="<?= htmlspecialchars($fragrance['image']) ?>" alt="<?= htmlspecialchars($fragrance['name']) ?> perfume"><span class="product-tag"><?= htmlspecialchars($fragrance['category']) ?></span><button class="quick-view" type="button">Quick view</button></div>
                        <div class="product-meta"><h3><?= htmlspecialchars($fragrance['name']) ?> <span><?= htmlspecialchars($fragrance['house']) ?></span></h3><p><?= htmlspecialchars($fragrance['description']) ?></p><div class="product-bottom"><span class="price"><?= formatInr((float) $fragrance['price']) ?> <small>/ <?= htmlspecialchars($fragrance['size']) ?></small></span><form class="product-actions" action="add_to_bag.php" method="post"><input type="hidden" name="product_id" value="<?= $index + 1 ?>"><button type="submit" name="action" value="add">ADD</button><button type="submit" name="action" value="buy">BUY</button></form></div></div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
        <section class="story" id="story"><div class="story-photo" role="img" aria-label="Botanical perfume ingredients"></div><div class="story-copy"><span class="eyebrow">Our point of view</span><h2>Good scent should feel personal.</h2><p>We look for the pause between a first impression and a lasting memory. Our collection is small by design: considered compositions, responsibly sourced ingredients and bottles that belong on your shelf.</p><a class="text-link" href="#ritual">Discover our approach &rarr;</a></div></section>
        <section class="ritual" id="ritual"><span class="eyebrow">A considered ritual</span><h2>Make it yours</h2><div class="ritual-grid"><div class="ritual-step"><div class="ritual-number">01</div><h3>Start with skin</h3><p>Warmth changes everything. Apply to pulse points and let the first notes unfold naturally.</p></div><div class="ritual-step"><div class="ritual-number">02</div><h3>Give it time</h3><p>The dry-down is where your fragrance becomes truly yours. Revisit it after an hour.</p></div><div class="ritual-step"><div class="ritual-number">03</div><h3>Wear your mood</h3><p>There are no rules. Follow the scent that makes the day feel a little more like you.</p></div></div></section>
        <section class="newsletter"><div><h2>A softer way to stay in touch.</h2><p>Notes on scent, spaces and the good things worth noticing.</p></div><form class="signup" id="signup"><input type="email" placeholder="Your email address" aria-label="Email address" required><button type="submit">Join us &rarr;</button></form></section>
    </main>
    <footer><small>&copy; <?= date('Y') ?> Aster & Moss. Made with intention.</small><div class="footer-links"><a href="journal.php">Journal</a><a href="contact.php">Contact</a><a href="bag.php">Bag</a></div></footer>
    <div class="modal-backdrop" id="modalBackdrop" role="dialog" aria-modal="true" aria-label="Fragrance details"><div class="modal"><button class="modal-close" id="modalClose" aria-label="Close">&times;</button><img id="modalImage" src="" alt=""><div class="modal-copy"><span class="eyebrow" id="modalCategory"></span><h2 id="modalName"></h2><p id="modalDescription"></p><div class="notes" id="modalNotes"></div><strong id="modalPrice"></strong><form class="modal-actions" action="add_to_bag.php" method="post"><input id="modalProductId" type="hidden" name="product_id" value=""><button class="button" name="action" value="add" type="submit">Add to bag <span>&rarr;</span></button><button class="button secondary" name="action" value="buy" type="submit">Buy now</button></form></div></div></div>
    <script>
        const fragrances = <?= json_encode($fragrances, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP) ?>;
        const modal = document.getElementById('modalBackdrop');
        let selected = 0;
        let bagCount = 0;
        document.querySelectorAll('.filter').forEach(filter => filter.addEventListener('click', () => {
            document.querySelectorAll('.filter').forEach(item => item.classList.remove('active'));
            filter.classList.add('active');
            document.querySelectorAll('.product-card').forEach(card => { card.style.display = filter.dataset.filter === 'All' || card.dataset.category === filter.dataset.filter ? '' : 'none'; });
        }));
        function openModal(index) {
            selected = index;
            const item = fragrances[index];
            document.getElementById('modalProductId').value = index + 1;
            document.getElementById('modalImage').src = item.image;
            document.getElementById('modalImage').alt = item.name + ' perfume';
            document.getElementById('modalCategory').textContent = item.category + ' / ' + item.house;
            document.getElementById('modalName').textContent = item.name;
            document.getElementById('modalDescription').textContent = item.description;
            document.getElementById('modalPrice').textContent = item.price + ' / ' + item.size;
            document.getElementById('modalNotes').innerHTML = item.notes.map(note => '<span class="note">' + note + '</span>').join('');
            modal.classList.add('open');
        }
        document.querySelectorAll('.quick-view').forEach(button => button.addEventListener('click', event => openModal(Number(event.target.closest('.product-card').dataset.index))));
        document.getElementById('modalClose').addEventListener('click', () => modal.classList.remove('open'));
        modal.addEventListener('click', event => { if (event.target === modal) modal.classList.remove('open'); });
        document.getElementById('signup').addEventListener('submit', event => { event.preventDefault(); event.target.innerHTML = '<span style="padding:13px 0;color:#d6c3aa">Thank you — you are on the list.</span>'; });
    </script>
</body>
</html>