<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <title>Document</title>
</head>
<body>

<?php
    //Include file koneksi, untuk koneksikan ke database
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    class Contact{
        static function insert(){
            require_once __DIR__ . '/../Model/Database.php';
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
                $owner=input($_POST["owner"]);
                $no_telp=input($_POST["no_telp"]);
        
                $sql="insert into owner (owner, no_telp) values
                ('$owner','$no_telp')";

                $hasil=mysqli_query($conn,$sql);
        

                if ($hasil) {
                    header("Location:dashboard.php");
                }
                else {
                    echo "<div class='alert alert-danger'> Gagal Menyimpan Data</div>";
        
                }
        
            }
            
        }
    }

    Contact::insert()
    ?>

<div class="ml-[100px] mt-6 p-6">
    <h1 class="text-2xl font-bold mb-4 text-white">Tambah Data</h1>

    <div class="overflow-x-auto bg-white rounded-lg shadow-md p-4">
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
            <div class="mb-4">
                <label for="no_telp" class="block text-gray-700 font-bold mb-2">No HP:</label>
                <input type="number" id="hp" name="no_telp" class="border border-gray-300 rounded-md p-2" placeholder="Masukkan Nomor HP" required>
            </div>
            <div class="mb-4">
                <label for="owner" class="block text-gray-700 font-bold mb-2">Owner:</label>
                <input type="text" id="owner" name="owner" class="border border-gray-300 rounded-md p-2" placeholder="Masukkan Nama Owner" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambahkan</button>
        </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>