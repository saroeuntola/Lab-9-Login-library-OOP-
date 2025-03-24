<?php
include('./auth.php');
$userAuth = new Auth();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($userAuth->register($username, $email, $password)) {
        echo "Registration successful!";
        header('Location: login.php'); 
        exit;
    } else {
        echo "Error occurred during registration.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-semibold text-center mb-6">Register</h2>
        <form method="POST" action="register.php">
            <div class="mb-4">
                <label class="block text-gray-700">Username</label>
                <input type="text" name="username" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
             <div class="mb-4">
                <label  class="block text-gray-700">Email</label>
                <input type="email" name="email" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Password</label>
                <input type="password" name="password"  class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <button type="submit" class="w-full py-3 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Register</button>
        </form>
        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">Already have an account? <a href="login.php" class="text-blue-500 hover:text-blue-700">Login here</a></p>
        </div>
    </div>
</body>
</html>
