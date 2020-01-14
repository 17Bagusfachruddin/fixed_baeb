<?php
include 'koneksi.php';
if(isset($_POST['enter'])){
 $user = $_POST['username'];
 $pass = $_POST['password'];

 

 $sql="select * from user where username='".$user."'AND password='".$pass."'";
    $result=mysqli_query($conn, $sql);
    $num_rows=mysqli_num_rows($result);
    $row=mysqli_fetch_row($result);
    if($num_rows>0){
        session_start();
        $_SESSION["nama"]=$row['username'];
        $_SESSION["pass"]=$row['password'];
        echo "<script>location='home.html';</script>";
    } else {
        echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
        echo "<script>location='login-form.html';</script>";
    }
}
?>
