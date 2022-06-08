

<?php 

session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: login.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

?>

			<h1>Welcome</h1>
<?php
		include 'db.con.php';
?>

<?php
	$sql ="SELECT *  FROM users";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck >0){
		while($row =  mysqli_fetch_assoc($result)){
			echo $row ['userName']." <br>". $row ['email']."<br> ".$row ['password']. "<br>";
		}

	}
?>





<a href="index.php?logout=true">Logout</a>





