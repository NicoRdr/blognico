<?php 
	include_once '../config.php';
  include_once '../functions.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- My Css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>BlogAs-tutos</title>
  </head>
  <body>
      <!-- Baniere Logo -->
    <div class="text-center">
        <h1>BlogAs-Tutos</h1>
        <blockquote>Rodrigues Nicolas</blockquote>
    </div>
    <hr>
    
    <!-- HEADER page -->
    <header>
      <!-- create navbar -->
      <nav>
        <!-- create Menu Parent -->
        <ul class="nav justify-content-center">
          <!-- create Menu Enfant -->
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add.php">Add Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> Log out  <i class="fas fa-sign-out-alt"> </i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">autre</a>
          </li>
        </ul>
      </nav>
    </header>
