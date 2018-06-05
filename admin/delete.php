<?php include_once 'header.php'; 

	//create variable id retrieval the request SQL GET for id post
	$id = $_GET['id'];

	//Call function deletePost for delete the post to id
	deletePost($id, $dbconnect);

	//Redirection root in the page home index
	header('location: index.php');


