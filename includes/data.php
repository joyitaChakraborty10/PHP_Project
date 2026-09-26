<?php
$fragrances = [
    ['id' => 1, 'name' => 'Santal 33', 'house' => 'Le Labo', 'category' => 'Woody', 'price' => 19090, 'size' => '50 ml / 1.7 fl oz', 'image' => 'https://images.unsplash.com/photo-1547887538-e3a2f32cb1cc?auto=format&fit=crop&w=900&q=85', 'description' => 'A smoky, warm composition where Australian sandalwood meets cedarwood and a trace of spice.', 'notes' => ['Sandalwood', 'Cedarwood', 'Cardamom']],
    ['id' => 2, 'name' => 'Another 13', 'house' => 'Le Labo', 'category' => 'Musk', 'price' => 19090, 'size' => '50 ml / 1.7 fl oz', 'image' => 'https://images.unsplash.com/photo-1594035910387-fea47794261f?auto=format&fit=crop&w=900&q=85', 'description' => 'An addictive halo of ambrette, moss and jasmine that lingers close to the skin.', 'notes' => ['Ambrette', 'Moss', 'Jasmine']],
    ['id' => 3, 'name' => 'Gypsy Water', 'house' => 'Byredo', 'category' => 'Fresh', 'price' => 18675, 'size' => '50 ml / 1.7 fl oz', 'image' => 'https://images.unsplash.com/photo-1615634260167-c8cdede054de?auto=format&fit=crop&w=900&q=85', 'description' => 'A fresh and woody fragrance inspired by colourful Romani nights and Nordic forests.', 'notes' => ['Bergamot', 'Juniper', 'Pine needles']],
    ['id' => 4, 'name' => 'Mojave Ghost', 'house' => 'Byredo', 'category' => 'Floral', 'price' => 18675, 'size' => '50 ml / 1.7 fl oz', 'image' => 'https://images.unsplash.com/photo-1592945403244-b3fbafd7f539?auto=format&fit=crop&w=900&q=85', 'description' => 'A desert bloom with powdery violet, magnolia and sandalwood, soft as sun-warmed air.', 'notes' => ['Ambrette', 'Violet', 'Sandalwood']],
    ['id' => 5, 'name' => 'Bal d’Afrique', 'house' => 'Byredo', 'category' => 'Floral', 'price' => 18675, 'size' => '50 ml / 1.7 fl oz', 'image' => 'https://images.unsplash.com/photo-1587017539504-67cfbddac569?auto=format&fit=crop&w=900&q=85', 'description' => 'A joyful, sophisticated blend of neroli and marigold warmed by cedar and vetiver.', 'notes' => ['Neroli', 'Marigold', 'Vetiver']],
    ['id' => 6, 'name' => 'Thé Noir 29', 'house' => 'Le Labo', 'category' => 'Woody', 'price' => 19090, 'size' => '50 ml / 1.7 fl oz', 'image' => 'https://images.unsplash.com/photo-1594035910387-fea47794261f?auto=format&fit=crop&w=900&q=85', 'description' => 'Black tea leaves and dry fig meet bergamot, bay leaf and a slow, smoky base.', 'notes' => ['Black tea', 'Fig', 'Bay leaf']]
];

function formatInr(float $amount): string
{
    return '₹' . number_format($amount, 2, '.', ',');
}

$journalEntries = [
    ['date' => 'September 18, 2026', 'category' => 'Field notes', 'title' => 'The quiet architecture of a good scent', 'image' => 'https://images.unsplash.com/photo-1523293182086-7651a899d37f?auto=format&fit=crop&w=1000&q=85', 'text' => 'Why the most memorable fragrances leave room for the person wearing them.'],
    ['date' => 'August 29, 2026', 'category' => 'Rituals', 'title' => 'A slower morning, one spray at a time', 'image' => 'https://images.unsplash.com/photo-1526045612212-70aab98cfd0e?auto=format&fit=crop&w=1000&q=85', 'text' => 'Small sensory rituals that make an ordinary day feel considered.'],
    ['date' => 'July 11, 2026', 'category' => 'Ingredients', 'title' => 'Meet the green notes', 'image' => 'https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=1000&q=85', 'text' => 'From crushed stems to rain-washed leaves, a guide to the freshness we love.']
];
?>