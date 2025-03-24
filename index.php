<?php
include('Auth.php');
$auth = new Auth();

if (!$auth->is_logged_in()) {
    header('Location: login.php'); 
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4 text-center">Welcome to the Dashboard</h2>

        <p class="text-center">You are logged in as <strong><?php echo $_SESSION['username']; ?></strong></p>

        <div class="text-center mt-4">
            <a href="logout.php" class="text-blue-500 hover:text-blue-600">Logout</a>
        </div>
    </div>

</body>
</html>
