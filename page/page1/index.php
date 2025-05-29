<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../page/page1/assets/css/style.css">
    <script defer src="../../page/page1/assets/js/script.js"></script>
    <title>Gym Equipments</title>
</head>
<body style="background-color: #90D1CA; color: black;">

    <header>
        <?php include __DIR__ . '/../../components/header.php'; ?>
    </header>

   <main class="main-container" style="display: flex; justify-content: center; padding: 20px;">
        <div class="equipment-container" style="background-color: white; border-radius: 10px; padding: 20px; width: 80%;">
            <h2 style="color: #129990;">Our Gym Equipment</h2>
            <?php include __DIR__ . '/../../components/equipment_filter.php'; ?>
        </div>
    </main>


    <footer class="footer">
        <?php include __DIR__ . '/../../components/footer.php'; ?>
    </footer>

</body>
</html>
