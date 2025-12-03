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
        <a class="absolute top-3" href="manager.php" id="add"><img class="pointer-events-none" src="img/add_icon.png" width="50" alt="home_button"></a>
    </nav>

    <main class="flex justify-center gap-20 flex-wrap p-20  w-[100vw] h-[100%] bg-cyan-400">
        <section class="w-120 h-70 bg-white rounded-2xl shadow-[0_0_10px_gray]" id="balance">
            
        </section>
        <section class="w-80 h-70 bg-white rounded-2xl shadow-[0_0_10px_gray]" id="month_stats">
            
        </section>
        <table class="w-[100%] h-70 bg-white rounded-2xl shadow-[0_0_10px_gray] bg-black text-center gap-10" id="table">
            <tr class="bg-gray-500 text-center">
                <th>yo</th>
                <th>yo</th>
                <th>yo</th>
                <th>yo</th>
                <th>yo</th>
            </tr>    
            <tr class="bg-gray-400">
                <td>ea</td>
                <td>ea</td>
                <td>ea</td>
                <td>ea</td>
                <td>ea</td>
            </tr>    
        </table>

        
    </main>
    <?php

        mysqli_close($conn);
    ?>
</body>

</html>