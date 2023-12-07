<?php

// index.php
require_once 'User.php';
require_once 'Article.php';
require_once 'Comment.php';

$user1 = new User(1, 'JohnDoe');
$user2 = new User(2, 'JaneSmith');

$article1 = new Article(101, 'PHP Basics', 'Introduction to PHP programming.', $user1);
$article2 = new Article(102, 'Object-Oriented PHP', 'Understanding OOP in PHP.', $user2);

$comment1 = new Comment(501, 'Great article!', $user1, $article1);
$comment2 = new Comment(502, 'Thanks for sharing.', $user2, $article1);
$comment3 = new Comment(503, 'Looking forward to more.', $user1, $article2);

// Display information
echo "User: {$user1->getUsername()}<br>";
echo "Article: {$article1->getTitle()}<br>";
echo "Comment: {$comment1->getContent()}<br>";

?>
