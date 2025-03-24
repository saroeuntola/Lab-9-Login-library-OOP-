<?php
include('Auth.php');
$auth = new Auth();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']) ? true : false;

    if ($auth->login($username, $password, $remember)) {
        echo "<p class='text-green-500'>Login successful!</p>";
         header('Location: index.php'); 
    } else {
        echo "<p class='text-red-500'>Invalid username or password!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4 text-center">Login</h2>

        <form action="login.php" method="POST">
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" required class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400" />
            </div>
            
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400" />
            </div>
            
            <div class="mb-4 flex items-center">
                <input type="checkbox" id="remember" name="remember" class="mr-2" />
                <label for="remember" class="text-sm text-gray-700">Remember me</label>
            </div>
             <div class="mt-3 mb-3 text-center">
           <a href="register.php" class="text-blue-500 hover:text-blue-700">Create new Account</a>
        </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">Login</button>
        </form>
    </div>

</body>
</html>
