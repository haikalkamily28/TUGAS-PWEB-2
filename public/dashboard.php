
<?php
require_once __DIR__ . '/../Model/Contact.php';
$arr = Contact::select();
Contact::delete();

    //Cek apakah ada kiriman form dari method post

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <title>Dashboard</title>
</head>
<body class="bg-gradient-to-r from-[#0061FF] to-[#60EFFF]">
  <!-- Sidebar -->

  <div>

  </div>
  <div class="bg-white border border-yellow-400 w-[100px] fixed top-10 flex flex-col items-center justify-items-start rounded-e-xl bottom-10">
      <ul>
          <li class="mb-4">
              <button class="text-blue-600 hover:text-blue-400 px-4 py-2">Akun</button>
          </li>
          <li class="mb-4">
              <button class="text-blue-600 hover:text-blue-400 px-4 py-2">About</button>
          </li>
          <li class="mb-4">
              <button class="text-blue-600 hover:text-blue-400 px-4 py-2">Services</button>
          </li>
          <li class="mb-4">
              <button class="text-blue-600 hover:text-blue-400 px-4 py-2">Contact</button>
          </li>
      </ul>
  </div>

  <!-- Content -->
  <div class="ml-[200px] mt-6 p-6">
      <h1 class="text-2xl font-bold mb-4 text-white">Dashboard</h1>

      <div class="mb-6">
        <a href="create.php" class=" flex bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Tambah Data</a>
    </div>

      <div class="overflow-x-auto bg-white rounded-lg shadow-md p-4">
          <table class="min-w-full table-auto">
              <thead class="bg-blue-200">
                  <tr>
                      <th class="border px-4 py-2">No ID</th>
                      <th class="border px-4 py-2">No HP</th>
                      <th class="border px-4 py-2">Owner</th>
                      <th class="border px-4 py-2"></th>
                  </tr>
              </thead>
              <tbody>
              <?php
                for ($i = 0; $i < count($arr['id']); $i++){
              ?>
                  <tr>
                      <td class="border px-4 py-2"><?= $i+1 ?></td>
                      <td class="border px-4 py-2"><?= $arr['no_telp'][$i] ?></td>
                      <td class="border px-4 py-2"><?= $arr['owner'][$i] ?></td>
                      <td class="border px-4 py-2">
                        <a href="update.php?id=<?php echo htmlspecialchars($arr['id'][$i]); ?>">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-meidum py-2 px-6 rounded">Edit</button>
                        </a>
                        <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id=<?php echo $arr['id'][$i]; ?>">
                            <button class="bg-red-500 hover:bg-red-700 text-white font-medium py-2 px-4 rounded">Delete</button>
                        </a>
                      </td>
                  </tr>
                  <?php
                  }
              ?>  
              </tbody>
          </table>
      </div>

      <div class="mt-10">
          <a href="/src/login.html" class="bg-white hover:bg-red-500 text-red-500 hover:text-white font-bold py-2 px-4 rounded-full">Logout</a>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
    
</html>