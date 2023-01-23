<?php include 'connection.php';?>
<?php

if(isset($_POST['submit']))
{
    $name=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $phone=$_POST['phone'];
   
    $query="INSERT INTO `user-login`( `username`, `email`, `password`, `pnumber`) VALUES ('$name', '$email', '$pass', '$phone')";
    $run=mysqli_query($con,$query);
    
if($run==true)
{
    ?>
<script>alert('data insert');
window.location.href = "../login.php";
</script>
    <?php
}

}
?>