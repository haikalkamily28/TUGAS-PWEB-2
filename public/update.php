<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    
    <title>Document</title>
</head>
<body class="bg-gradient-to-r from-[#0061FF] to-[#60EFFF]">

<?php




function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_GET['id'])) {
    require_once __DIR__ . '/../Model/Database.php';
    $id=input($_GET["id"]);

    $sql="select * from owner where id=$id";
    $hasil=mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($hasil);


}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once __DIR__ . '/../Model/Database.php';
    // $id=htmlspecialchars($_POST['id']);
    $no_telp=input($_POST["no_telp"]);
    $owner=input($_POST["owner"]);
    


    $sql="update owner set
        owner='$owner',
        no_telp='$no_telp',
        where id=$id";

    //Mengeksekusi atau menjalankan query diatas
    $hasil=mysqli_query($conn,$sql);

    //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
    if ($hasil) {
        header("Location:dashboard.php");
    }
    else {
        echo "<div class='alert alert-danger'>Gagal Menyimpan Data</div>";

    }

}

?>

    <!-- Sidebar -->
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
  
        <!-- Modul update data -->
        <div id="updateForm" class=" ml-60 mt-7 bg-white p-4 rounded-lg shadow-md">
            <h2 class="text-lg font-bold mb-4">Update Data</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="mb-4">
                    <label for="no_telp" class="block text-gray-700 font-bold">No HP:</label>
                    <input type="number" id="hp" name="no_telp" class="border border-gray-300 rounded-md p-2">
                </div>
                <div class="mb-4">
                    <label for="owner" class="block text-gray-700 font-bold">Owner:</label>
                    <input type="text" id="owner" name="owner" class="border border-gray-300 rounded-md p-2">
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
            </form>
        </div>
  
        <div class="mt-10">
            <a href="/src/login.html" class="bg-white hover:bg-red-500 text-red-500 hover:text-white font-bold py-2 px-4 rounded-full">Logout</a>
        </div>
      </div>
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  </body>
</html>  