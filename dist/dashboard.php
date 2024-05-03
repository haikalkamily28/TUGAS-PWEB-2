<?php
require_once __DIR__ . '/../app/models/contact.php';
$arr = Contact::select();
Contact::create();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/dist/style.css">
    <title>Dashboard</title>
</head>
<body class="bg-gradient-to-r from-purple-600 to-blue-600">
    <!-- Sidebar -->

    <div>

    </div>
    <div class="bg-gray-800 w-[100px] fixed top-10 flex flex-col items-center justify-items-start rounded-e-xl bottom-10">
        <ul>
            <li class="mb-4">
                <button class="text-white hover:bg-gray-700 px-4 py-2 rounded-full">Akun</button>
            </li>
            <li class="mb-4">
                <button class="text-white hover:bg-gray-700 px-4 py-2 rounded-full">About</button>
            </li>
            <li class="mb-4">
                <button class="text-white hover:bg-gray-700 px-4 py-2 rounded-full">Services</button>
            </li>
            <li class="mb-4">
                <button class="text-white hover:bg-gray-700 px-4 py-2 rounded-full">Contact</button>
            </li>
        </ul>
    </div>

    <!-- Content -->
    <div class="ml-[100px] mt-6 p-6">
        <h1 class="text-2xl font-bold mb-4 text-white">Dashboard</h1>

        <div class="overflow-x-auto bg-white rounded-lg shadow-md p-4">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="border px-4 py-2">No ID</th>
                        <th class="border px-4 py-2">No HP</th>
                        <th class="border px-4 py-2">Owner</th>
                        <th class="border px-4 py-2"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">1</td>
                        <td class="border px-4 py-2">08123456789</td>
                        <td class="border px-4 py-2">Mochammad Haikal</td>
                        <td class="border px-4 py-2">
                            <a href="edit.html">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                            </a>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">2</td>
                        <td class="border px-4 py-2">08987654321</td>
                        <td class="border px-4 py-2">Mochammad Ali</td>
                        <td class="border px-4 py-2">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <a href="index.html" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Logout</a>
        </div>
    </div>

</body>

</body>
</html>
