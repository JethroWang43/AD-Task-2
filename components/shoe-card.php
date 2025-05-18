<?php
function renderShoeCard($shoe) {
    return "
    <div class='shoe-card'>
        <p><strong>Name:</strong> {$shoe['name']}</p>
        <p><strong>Ratings:</strong> {$shoe['rating']}</p>
        <p><strong>Price:</strong> {$shoe['price']}</p>
        <p><strong>Sizes:</strong> " . implode(", ", $shoe['sizes']) . "</p>
    </div>
    ";
}
?>
