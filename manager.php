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
    <title>Smart Wallet</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="flex justify-center">
    <form action="manager.php" method="post" class="flex flex-col items-center gap-5 md:w-[30%] h-[100vh] bg-blue-400 shadow-[0_0_20px_gray] p-15" id="form">
        <input type="hidden" name="mode" value="income">
        <div class="self-end flex" id="switch">
            <button type="button" class="bg-gray-300 w-20 selected rounded-l-lg p-2 cursor-pointer" id="inc">Income</button>
            <button type="button" class="bg-gray-300 w-20 rounded-r-lg p-2 cursor-pointer" id="exp">Expenses</button>
        </div>
        <h1 class="text-4xl text-center text-white">Smart Wallet</h1>
        <div class="w-full">
            <label for="type">Type</label>
            <select name="type" id="type" class="bg-white w-full rounded-lg p-2">
                <option value="default" disabled selected>choose a type</option>
                <option value="salary">Salary</option>
                <option value="freelance">Freelance</option>
                <option value="gifts">Gifts</option>
                <option value="investments">Investments</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="w-full">
            <label for="amount">Amount</label>
            <input class="bg-white rounded-lg p-2 w-full" placeholder="Amount" type="number" step="0.1" name="amount" id="amount">
        </div>
        <div class="w-full">
            <label for="date">Date</label>
            <input class="bg-white rounded-lg p-2 w-full" placeholder="text" type="date" name="date" id="date">
        </div>
        <div class="w-full">
            <label for="desc">Description</label>
            <input class="bg-white rounded-lg p-2 w-full" placeholder="Write a short description" type="text" name="desc" id="desc">
        </div>
        <button class="w-50 bg-white p-2 rounded-lg mt-10 hover:shadow-[0_0_10px_gray] hover:bg-blue-500 hover:scale-110 hover:text-white transition duration-200 cursor-pointer" type="submit" name="add">Add</button>
    </form>

    <?php
    if (isset($_POST["add"])) {
        // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        echo "nice";
        // if (empty($username)) {
        //     echo "plase enter a username";
        // } elseif (empty($password)) {
        //     echo "Please enter a password";
        // } else {
        //     $check_sql = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
        //     $result = mysqli_query($conn, $check_sql);

        //     if (mysqli_num_rows($result) > 0) {
        //         echo "This username is already taken.";
        //     } else {
        //         $sql = "INSERT INTO users (username, password)
        //                     VALUES ('$username', '$hash')";
        //         mysqli_query($conn, $sql);
        //         echo "You are now Registered!";
        //     }
        // }
    }
    // mysqli_close($conn);
    ?>
</body>

</html>