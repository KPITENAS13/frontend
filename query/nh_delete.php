 <?php  
 $connect = mysqli_connect("localhost", "root", "", "inventaris");  
 $sql = "DELETE FROM nilai_harian WHERE id = ".$_POST["id"]."";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Berhasil Dihapus';  
 }  
 ?>