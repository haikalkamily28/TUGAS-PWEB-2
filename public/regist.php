<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <title>Register</title>
</head>
<body class="bg-gradient-to-r from-[#0061FF] to-[#60EFFF] flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full sm:w-96">
        <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Register</h1>
        <form action="/session-login" method="POST">
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" autocomplete="username" class="mt-1 py-1 hover:border-blue-600 focus:ring-purple-500 focus:border-purple-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" autocomplete="email" class="mt-1 py-1 hover:border-blue-600 focus:ring-purple-500 focus:border-purple-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" autocomplete="email" class="mt-1 py-1 hover:border-blue-600 focus:ring-purple-500 focus:border-purple-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" autocomplete="new-password" class="mt-1 py-1 hover:border-blue-600 focus:ring-purple-500 focus:border-purple-500 border block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
            </div>
            <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gradient-to-r from-[#0061FF] to-[#60EFFF] hover:from-sky-600 hover:to-sky-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Register
                </button>
            </div>
        </form>
        <div class="mt-4 text-center">
            <p class="text-gray-600">Already have an account?</p>
            <a href="/src/login.html" class="font-medium text-blue-500 hover:text-blue-800">Sign in</a>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>