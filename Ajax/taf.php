<?php

$connect = new PDO('mysql:host=localhost;dbname=m_31','root','');
$statment1 = $connect -> prepare('SELECT * FROM posts');
$result1 = $statment1 -> execute();
$posts = $statment1->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($posts);