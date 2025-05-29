<?php

function getEquipment() {
    return [
        // Cardio (4)
        [
            'name' => 'Treadmill',
            'type' => 'Cardio',
            'rate' => 10,
            'price' => 50000, // 100 * 500
            'discount' => 5000, // 10% of 50000
            'size' => 'Large'
        ],
        [
            'name' => 'Exercise Bike',
            'type' => 'Cardio',
            'rate' => 8,
            'price' => 40000, // 80 * 500
            'discount' => 4000, // 10% of 40000
            'rating' => 4,
            'size' => 'Medium'
        ],
        [
            'name' => 'Rowing Machine',
            'type' => 'Cardio',
            'rate' => 8,
            'price' => 37500, // 75 * 500
            'discount' => 3750, // 10% of 37500
            'size' => 'Medium'
        ],
        [
            'name' => 'Elliptical Trainer',
            'type' => 'Cardio',
            'rate' => 9,
            'price' => 60000, // 120 * 500
            'discount' => 6000, // 10% of 60000
            'size' => 'Large'
        ],

        // Strength (4)
        [
            'name' => 'Bench Press',
            'type' => 'Strength',
            'rate' => 9,
            'price' => 45000, // 90 * 500
            'discount' => 4500, // 10% of 45000
            'size' => 'Large'
        ],
        [
            'name' => 'Dumbbells',
            'type' => 'Strength',
            'rate' => 7,
            'price' => 10000, // 20 * 500
            'discount' => 1000, // 10% of 10000
            'size' => 'Small'
        ],
        [
            'name' => 'Kettlebell Set',
            'type' => 'Strength',
            'rate' => 6,
            'price' => 7500, // 15 * 500
            'discount' => 750, // 10% of 7500
            'size' => 'Small'
        ],
        [
            'name' => 'Pull-up Bar',
            'type' => 'Strength',
            'rate' => 8,
            'price' => 6000, // 12 * 500
            'discount' => 600, // 10% of 6000
            'size' => 'Small'
        ],

        // Leg (4)
        [
            'name' => 'Leg Press',
            'type' => 'Leg',
            'rate' => 8,
            'price' => 42500, // 85 * 500
            'discount' => 4250, // 10% of 42500
            'size' => 'Large'
        ],
        [
            'name' => 'Squat Rack',
            'type' => 'Leg',
            'rate' => 9,
            'price' => 47500, // 95 * 500
            'discount' => 4750, // 10% of 47500
            'size' => 'Large'
        ],
        [
            'name' => 'Leg Extension Machine',
            'type' => 'Leg',
            'rate' => 7,
            'price' => 35000, // 70 * 500
            'discount' => 3500, // 10% of 35000
            'size' => 'Medium'
        ],
        [
            'name' => 'Calf Raise Machine',
            'type' => 'Leg',
            'rate' => 7,
            'price' => 30000, // 60 * 500
            'discount' => 3000, // 10% of 30000
            'size' => 'Medium'
        ],
    ];
}

$equipment = getEquipment();

// Set default filter to 'All'
$filter = isset($_GET['filter']) ? strtolower($_GET['filter']) : 'all';

// Filter logic
$filtered = array_filter($equipment, function ($item) use ($filter) {
    return $filter === 'all' || strtolower($item['type']) === $filter;
});
$filtered = array_values($filtered); // Reindex
?>

<!-- Filter Buttons -->
<div class="filter-form">
    <?php
    $types = ['All', 'Cardio', 'Strength', 'Leg'];
    foreach ($types as $type):
        $typeLower = strtolower($type);
    ?>
        <button type="button" class="filter-btn" data-filter="<?= $typeLower ?>">
            <?= $type ?>
        </button>
    <?php endforeach; ?>
</div>


<!-- Equipment List -->
<ul class="equipment-list">
    <?php if (empty($filtered)): ?>
        <li>No equipment found.</li>
    <?php else: ?>
        <?php foreach ($filtered as $item): ?>
            <li class="equipment-item" data-type="<?= strtolower($item['type']) ?>">
    <div class="equipment-card">
        <h3><?= htmlspecialchars($item['name']) ?></h3>
        <p>Type: <?= htmlspecialchars($item['type']) ?></p>
        <p>Rating: <?= number_format($item['rate']) ?>/10</p>
        <p>Price: ₱<?= number_format($item['price']) ?></p>
        <p>Discount(10%): ₱<?= number_format($item['discount']) ?></p>
        <p>Size: <?= htmlspecialchars($item['size']) ?></p>
    </div>
</li>

        <?php endforeach; ?>
    <?php endif; ?>
</ul>

