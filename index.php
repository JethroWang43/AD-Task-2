<?php
include 'components/header.php';
include 'components/nav.php';
include 'components/footer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome | Shoe Store</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<!-- Header Section -->
<header>
    <div class="logo">
        <?php echo getLogo(); ?>
    </div>
</header>

<!-- Top Navigation -->
<nav class="top-nav">
    <?php echo getNav(); ?>
</nav>

<!-- Main Content -->
<main class="home-content">
    <h2>Welcome to the NIKE Store!</h2>
    <p>Discover the latest collection of stylish and comfortable shoes.</p>
    <a href="page/page1/index.php" class="btn">Browse Collection</a>
</main>

<!-- Footer -->
<footer class=footer>
    <?php echo getFooter(); ?>
</footer>

</body>
</html>
