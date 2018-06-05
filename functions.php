<?php 
// create function for add post in the data bade to form in the file add.php
function bookPost($name1, $author1, $date1, $dbconnect){
	//création de la variable sql pour lui injecter inser into pour le racorder à la database
	$sql = "INSERT INTO librairie(name, author, date) VALUES ('$name1','$author1','$date1')";
	//création d'une variable 
	$stmt = $dbconnect->prepare($sql);

	//excuter variable stmt
	$stmt->execute();

}

// create function read in import the post an data base in the file index
function getBook($dbconnect){
	//create variable SQL for retrieval all book in the data base
	$sql = "SELECT * FROM librairie";
	//create variable STMT prep execute variable SQL the request sql. 
	$stmt = $dbconnect->prepare($sql);
	//Execute Variable STMT
	$stmt->execute();

	//creatin variable fetchall() for display and retrieval full book in the data base
	$book = $stmt->fetchAll();

	//create one return for retrieval the post book in the file index.php
	return $book;

}

//Create the function delete the post for id 
function deletePost($id, $dbconnect){
	$sql = "DELETE FROM librairie WHERE id = '$id'";
	$stmt = $dbconnect->prepare($sql);
	$stmt->execute();

}

//create the function SelectPost for retrieval the post book name and author
function selectPost($id, $dbconnect){

	$sql = "SELECT * FROM librairie WHERE id = '$id'";
	$stmt = $dbconnect->prepare($sql);
	$stmt->execute();

	//create variable request retrieval stmt for 
	$request = $stmt->fetch();

	return $request;

}
//Creatre the function Update Post
function updatePost($id, $name, $author, $date, $dbconnect){
	$sql = "UPDATE librairie SET name = '$name', author = '$author', date = '$date' WHERE id = '$id'";
	$stmt = $dbconnect->prepare($sql);
	$stmt->execute();
}
