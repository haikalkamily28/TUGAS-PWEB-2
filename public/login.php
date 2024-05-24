<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />

    <title>PWEB 2</title>
</head>

<body class="bg-gradient-to-r from-[#0061FF] to-[#60EFFF] flex items-center justify-center h-screen">
    
    <div class="bg-white p-8 rounded-lg shadow-md w-full sm:w-96">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Login</h1>
        <form action="/session-login" method="POST" >
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" autocomplete="username" class="ps-2 mt-1 py-1 hover:border-blue-600 focus:ring-purple-500 focus:border-purple-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" autocomplete="current-password" class="ps-2 mt-1 py-1 hover:border-blue-600  focus:ring-purple-500 focus:border-purple-500 block w-full shadow-sm sm:text-sm border border-gray-300 rounded-md">
            </div>
            <div class="mb-4 flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-purple-500 focus:ring-purple-500 border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                </div>
                <div class="text-sm">
                    <a href="#" class="font-medium text-[#0061FF] hover:text-blue-800">Forgot your password?</a>
                </div>
            </div>
            <div>
                <a href="/src/dashboard.html">
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-xl text-sm font-medium text-white bg-gradient-to-r from-[#0061FF] to-[#60EFFF] hover:from-[#60EFFF] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#60EFFF]">Sign in</button>
                </a> 
            </div>
        </form>
        <div class="mt-4 text-center">
            <p class="text-gray-600">Don't have an account?</p>
            <a href="/src/regist.html" class="font-medium text-blue-400 hover:text-blue-500">Sign up</a>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>