<?php session_start();
?>

<?php 
include('dist/includes/dbcon.php');

if(isset($_POST['login']))
{

$user_unsafe=$_POST['username'];
$pass_unsafe=$_POST['password'];


$user = mysqli_real_escape_string($con,$user_unsafe);
$pass1 = mysqli_real_escape_string($con,$pass_unsafe);

$pass=md5($pass1);
$salt="a1Bz20ydqelm8m1wql";
$pass=$salt.$pass;

date_default_timezone_set('Asia/Manila');

$date = date("Y-m-d H:i:s");

$query=mysqli_query($con,"select * from usuario where  usuario='$user' and password='$pass' ")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);
           $id=$row['id'];
           $name=$row['usuario'];
           $counter=mysqli_num_rows($query);

    


  	if ($counter == 0) 
	  {	
	  echo "<script type='text/javascript'>alert('Usuario o pasword incorrectos!');
	  document.location='index.php'</script>";
	  } 
	  elseif ($counter > 0)
	  {
	  $_SESSION['id']=$id;	
	  $_SESSION['name']=$name;		
	  

		$remarks="ha iniciado sesión en el sistema en ";  


	
             

		 echo "<script type='text/javascript'>document.location='pagina/layout/inicio.php'</script>";
	  }
}	 
?>

	
