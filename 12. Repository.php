<?php
require_once __DIR__ . ("/model/comments.php");
require_once __DIR__ . ("/repository/CommentRepository.php");
require_once __DIR__.("/01. koneksi.php");

use Model\Comments;
use Repository\CommentRepositoryImp;

$connection = getConnection();

$repository = new CommentRepositoryImp($connection);
// $comment = new Comments(email: "repositoryTest@gmail.com", comment: "Hi");
// $newComment = $repository->insert($comment);
// var_dump($newComment->getId());

// $comment = $repository->findById(16);
// var_dump($comment);

$comment = $repository->findAll();
var_dump($comment);

$connection = null;