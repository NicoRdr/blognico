<?php include_once 'header.php'?>	
	
	<hr>

	<div class="text-center">
		<h2 >Add Book</h2>
	</div>

	<form action="" method="POST" >
		<!-- create div container -->
		<div class="nr-container-article">
			<!-- Title th book -->
			<div class="nr-article-div">
				<input type="text" class="" name="title" placeholder="Title Article">
			</div>

			<div class="nr-article-div">
				<input type="file" name="img">
			</div>


			<div class="nr-article-div">
				<select class="nr-article-select" id="monselect">
				  <option selected>Séléction une catégorie</option> 
				  <option value="Astuces">Astuce</option> 
				  <option value="Tutoriel">Tutoriel</option>
				  <option value="valeur3">Autre</option>
				</select>
			</div>

			<!-- Content -->
			<div class="nr-article-div nr-ckeditor">
				<textarea name="editor1" id="editor1" rows="10" cols="80">
                	
            	</textarea>
			</div>

			<div class="nr-article-div">
				<input type="date" class="" name="dateadd">
			</div>
					
			
			<!-- Bouton envoyer -->
			<div class="nr-article-div">
				<input type="submit" value="Send">
			</div>
		</div>		
	</form>



<?php 
	//creation function for add the book in the data base
	//create condition for insert title and autho for data bases
	if ( isset($_POST['name']) && isset($_POST['author']) && isset($_POST['date']) ) {


		//create variable for retrieval vartibale SQL post data base
		$name = $_POST['name'];
		$author = $_POST['author'];
		$date = $_POST['date'];

		bookPost($name, $author, $date, $dbconnect);
		header('Location: index.php');
		
	}
?>



<?php include_once 'footer.php' ?>	