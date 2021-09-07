<?php

include("../db_connect.php");

if (isset($_POST['save_task'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $query = "INSERT INTO task (title, description) VALUES ('$title', '$description');";
  $result = mysqli_query($conn, $query);
  if ($result) {
    $_SESSION['message'] = "Task Saved Successfully: " . $query;
    $_SESSION['message_type'] = 'success';
  }
  else
  {
    // die("Query Failed. save_task.php");
    $_SESSION['message'] = "Query Failed: " . $query . " " . $result;
    $_SESSION['message_type'] = 'danger';
  }
  header('Location: ../../index.php');
}