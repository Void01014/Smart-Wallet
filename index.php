<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body class="flex justify-center">
    <form action="index.php" method="post" class="flex flex-col w-[40%] p-10">
        <h2 class="text-4xl">Welcome</h2>
        <br>
        <label for="username">username:<br></label>
        <input class="border p-1 rounded-[5px]" placeholder="username" type="text" name="username" id="username">
        <label for="pass">password:<br></label>
        <input class="border p-1 rounded-[5px]" placeholder="password" type="password" name="pass" id="pass">
        <button class="cursor-pointer" type="submit">submit</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST["pass"];

        if (empty($username)) {
            echo "plase enter a username";
        } elseif (empty($password)) {
            echo "Please enter a password";
        } else {
            $check_sql = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
            $result = mysqli_query($conn, $check_sql);

            if (mysqli_num_rows($result) > 0) {
                echo "This username is already taken.";
            }else{
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (username, password)
                            VALUES ('$username', '$hash')";
                mysqli_query($conn, $sql);
                echo "You are now Registered!";
            }
        }
    }
    mysqli_close($conn);
    ?>
</body>

</html>