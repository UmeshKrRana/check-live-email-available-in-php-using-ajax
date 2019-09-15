<?php
			
		require_once('config/db-config.php');

		$db = new DBController();
		$conn = $db->connect();


		// check if email is already taken
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email_check']) && $_POST['email_check'] == 1) {

			// validate email

			$email = mysqli_real_escape_string($conn, $_POST['email']);

			$sqlcheck = "SELECT email FROM registration WHERE email = '$email' ";

			$checkResult = $conn->query($sqlcheck);

			// check if email already taken
			if($checkResult->num_rows > 0) {
				echo "Sorry! email has already taken. Please try another.";
			}
		}


		// save records into the database
		elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save']) && $_POST['save'] == 1) {

			$name 		= 		$_POST['name'];
			$email 		= 		$_POST['email'];
			$password   = 		$_POST['password'];
			$save 		= 		$_POST['save'];

			$password   =        md5($password);

			// insert into table

			$sql = "INSERT INTO registration (name, email, password) VALUES ('$name', '$email', '$password') ";

			$result = $conn->query($sql);
			
			if($result) {
				echo "<div class='alert alert-success alert-dismissible'> 
					<button class='close' type='button' data-dismiss='alert'>&times;</button>
					Registration has completed successfully.
				</div>";
			}

			else {
				echo "<div class='alert alert-danger alert-dismissible'>
				<button type='button' class='close' data-dismiss='alert'> &times; </button>
				Whoops! some error encountered. Please try again.";
			}
		}	

?>