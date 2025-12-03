<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="script.js" defer></script>
    <title>Manager</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="flex justify-center">
    <nav>
        <a class="absolute top-3 border" href="manager.php" id="add"></a>
    </nav>

    <main>
        <section id="balance">
            
        </section>
    </main>
    <?php

        mysqli_close($conn);
    ?>
</body>

</html>