<?php include_once 'header.php'; ?>

<!-- Create php for call the function update post book -->
	<?php 
		//create one variable SQL GET for retrieval the post id clicked
		$id = $_GET['id'];
		//Retrieval the function in file function insert variable
		$request = selectPost($id, $dbconnect);

	if (isset($_POST['id'])){
			//create varibale for call and retrieval id, name, author and the date in database
			$id = $_POST['id'];
			$name = $_POST['name'];
			$author = $_POST['author'];
			$date = $_POST['date'];

			//call the function updatePost add modification the post select

		updatePost($id, $name, $author, $date, $dbconnect);
		header('Location; index.php');
	}
	?>

	<div class="text-center">
		<h2 >Update Post Book</h2>
		<a class="btn btn-secondary " href="index.php" role="button">Home</a>
	</div>

	<hr>

	<form action="" method="POST" >
		<div class="container">
			<input type="hidden" name="id" value="<?php echo $request['id'];?>">

			<!-- Title th book -->
			<div class="form-group">
				<label>Title Book</label>
				<input type="text" class="form-control" name="name" value="<?php echo $request['name'];?>">
			</div>

			<!-- Author -->
			<div class="form-group">
				<label>Author</label>
				<input type="text" class="form-control" name="author" value="<?php echo $request['author'];?>">
			</div>

			<div class="form-group">
				<label>Date</label>
				<input type="date" class="form-control" name="date" value="<?php echo $request['date'];?>">
			</div>
					
			
			<!-- Bouton envoyer -->
			<input type="submit" value="Update">
		</div>		
	</form>

<?php include_once 'footer.php'; ?>