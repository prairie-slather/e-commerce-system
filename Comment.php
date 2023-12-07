<?php

// Comment.php
class Comment {
    private $commentId;
    private $content;
    private $user;
    private $article;

    public function __construct($commentId, $content, $user, $article) {
        $this->commentId = $commentId;
        $this->content = $content;
        $this->user = $user;
        $this->article = $article;
    }

    public function getCommentId() {
        return $this->commentId;
    }

    public function getContent() {
        return $this->content;
    }

    public function getUser() {
        return $this->user;
    }

    public function getArticle() {
        return $this->article;
    }
}

?>
