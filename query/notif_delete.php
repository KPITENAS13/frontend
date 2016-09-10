 <?php  
 $connect = mysqli_connect("localhost", "root", "", "inventaris");  
 $id = $_POST['id'];
 $sql = "DELETE FROM pemberitahuan WHERE id = ".$id."";  
 mysqli_query($connect, $sql);
// if(mysqli_query($connect, $sql))  
// {  
//      echo 'Pemberitahuan Berhasil Dihapus';  
// }  
?>