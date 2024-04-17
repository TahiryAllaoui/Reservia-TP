<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=reservia_users;charset=utf8', 'root', '');
    echo "Connected succefully";
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
