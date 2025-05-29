<?php
function getMealSuggestions() {
    return [
        "Monday" => [
            "Breakfast" => "Greek yogurt with whey protein and almonds",
            "Lunch" => "Grilled chicken breast with quinoa and broccoli",
            "Dinner" => "Salmon fillet with lentils and spinach"
        ],
        "Tuesday" => [
            "Breakfast" => "Egg white omelette with cottage cheese",
            "Lunch" => "Turkey breast wrap with hummus and mixed greens",
            "Dinner" => "Beef steak with black beans and asparagus"
        ],
        "Wednesday" => [
            "Breakfast" => "Protein smoothie (whey, milk, banana, peanut butter)",
            "Lunch" => "Tuna salad with chickpeas and avocado",
            "Dinner" => "Grilled shrimp with brown rice and green beans"
        ],
        "Thursday" => [
            "Breakfast" => "Scrambled eggs with smoked salmon",
            "Lunch" => "Chicken breast salad with edamame and feta cheese",
            "Dinner" => "Pork tenderloin with lentil stew"
        ],
        "Friday" => [
            "Breakfast" => "Cottage cheese with walnuts and berries",
            "Lunch" => "Grilled steak with kidney beans and roasted vegetables",
            "Dinner" => "Baked cod with quinoa and kale"
        ],
        "Saturday" => [
            "Breakfast" => "Protein pancakes with Greek yogurt",
            "Lunch" => "Roast beef sandwich on whole grain bread",
            "Dinner" => "Chicken stir-fry with tofu and mixed vegetables"
        ],
        "Sunday" => [
            "Breakfast" => "Omelette with turkey breast and spinach",
            "Lunch" => "Grilled salmon salad with boiled eggs",
            "Dinner" => "Lamb chops with lentils and Brussels sprouts"
        ]
    ];
}

$meals = getMealSuggestions();
$today = date('l'); // Gets the current day, e.g., "Monday"
?>

<div class="container-1">
    <h2>Meal Suggestion for <?= $today ?></h2>
    <?php if (isset($meals[$today])): ?>
        <?php foreach ($meals[$today] as $type => $meal): ?>
            <p><strong><?= $type ?>:</strong> <?= $meal ?></p>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No meal suggestions available for today.</p>
    <?php endif; ?>
</div>
