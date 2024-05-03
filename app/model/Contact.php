<?php
require_once 'database.php';

Class Contact{ 
    static function select(){
        global $conn;
        $sql = "SELECT * FROM owner";
        $result = $conn->query($sql);
        $arr = array();

        if($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                foreach ($row as $key => $value){
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }
    static function update(){
        //ada di dalam file update.php
    }
    static function insert(){
        require_once __DIR__ . '/../app/models/database.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
            $user_id=input($_POST["user_id"]);
            $owner=input($_POST["owner"]);
            $no_hp=input($_POST["no_hp"]);
    
            $sql="insert into owner (user_id,owner,no_hp,email) values
            ('$user_id','$owner','$no_hp')";

            $hasil=mysqli_query($conn,$sql);
    

            if ($hasil) {
                header("Location:index.php");
            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    
            }
    
        }
        
    }

    static function delete(){
        global $conn;
        if (isset($_GET['id'])) {
            $id=htmlspecialchars($_GET["id"]);
      
            $sql="delete from owner where id='$id' ";
            $hasil=mysqli_query($conn,$sql);
      
            //Kondisi apakah berhasil atau tidak
                if ($hasil) {
                    header("Location:index.php");
      
                }
                else {
                    echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
      
                }
            }
        
    }
  }


?>