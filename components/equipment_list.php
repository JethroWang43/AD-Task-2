<?php
include __DIR__ . '/../handlers/equipment_data.php';

if (isset($equipment_list) && is_array($equipment_list)) {
    foreach ($equipment_list as $equipment) {
        echo "<div style='border-bottom: 1px solid #ccc; padding: 10px 0;'>";
        echo "<h3 style='color: #129990;'>{$equipment['name']} ({$equipment['type']})</h3>";
        echo "<p>{$equipment['description']}</p>";
        echo "<strong>Rating:</strong> {$equipment['rating']} / 5";
        echo "</div>";
    }
} else {
    echo "<p>No equipment data available.</p>";
}
?>
