<?php include_once 'header.php'; ?>
	<div class="text-center" >
	  <img src="https://myslu.slu.edu/res/images/cas-padlock-icon.png" class="rounded  nr-picture-login" alt="...">
	</div>

	<div class="container nr-login-admin">
		<form method="POST">
			<div class="form-group">
				<label>Email address</label>
				<input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" placeholder="Password">
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
			
	</div>

	<?php 
		//create the condition for email variable POST SQL
		if (isset($_POST['email'])) {
			$email = $_POST['email'];
			
			//create retrievalthe users Admin inster request SQL
			$sql = "SELECT * FROM admin WHERE email ='$email'";
			//create variable 
			$stmt = $dbconnect->prepare($sql);
			$stmt->execute();

			$request = $stmt->fetch();

			//creation variable retrievalthe password crypted
			$passwordDB = $request['password'];
			

			$passwordPosted = password_hash(
		 		$_POST['password'], 
			 		PASSWORD_BCRYPT,
			 		array(
		             	'salt' => $saltKey,
		             	'cost' => 12,
			    ));
		 	//création d'une condition pour vérifier le mot passe pour la connection
		    if ($passwordDB === $passwordPosted) {

		    	session_start();
		    	$_SESSION['email'] = $request['email'];
		    	echo 'WELCOME';
		    	header('Location: index.php');
	    	}else{
 				echo 'EXIT';
		    	}

		 	//création d'une condition pour vérifier le mot passe pour la connection
		    if ($passwordDB === $passwordPosted) {
		    	session_destroy()();
		    	$_SESSION['email'] = $request['email'];
		    	echo 'EXIT';
		    	header('Location: ../index.php');
	    	}else{
 				echo '..Recommence';
		    	}
		}


	?>

<?php include_once 'footer.php'; ?>

$_SESSION[session_destroy];