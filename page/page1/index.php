<?php
include '../../components/header.php';
include '../../components/nav.php';
include '../../components/footer.php';
include '../../components/shoe-card.php';
include '../../handler/shoe-handler.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Second Page - Shoe Store</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="container">
        <!-- Logo -->
        <header>
            <?php echo getLogo(); ?>
        </header>
        <nav class="top-nav">
            <?php echo getNav(); ?>
        </nav>

        <div class="main-content">
            <!-- Shoe Grid -->
            <section class="shoe-grid">
                <?php
                if (isset($shoes) && is_array($shoes)) {
                    foreach ($shoes as $shoe) {
                        echo renderShoeCard($shoe);
                    }
                } else {
                    echo "<p>No shoes available.</p>";
                }
                ?>
            </section>
        </div>

        <!-- Footer -->
        <footer class=footer>
            <?php echo getFooter(); ?>
        </footer>
    </div>
</body>
</html>
