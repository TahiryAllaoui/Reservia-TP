<?php require("./pdo.php");

$username = $_POST["username"];
$insertUser = $db->prepare("INSERT INTO `users`(`id`, `name`, `surname`, `username`, `password`) VALUES (NULL, :name,:surname,:username,:password)");
$insertUser->execute([
  'name' => $_POST["name"],
  'surname' => $_POST["surname"],
  'username' => $_POST["username"],
  'password' => crypt($_POST["password"], 10),
]);
header("Location:/Reservia/front");

echo `<script>
  let username = $username;
  localStorage.setItem('username', username);
<script>`;
