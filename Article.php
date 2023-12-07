<?php

// Article.php
class Article {
    private $articleId;
    private $title;
    private $content;
    private $author;

    public function __construct($articleId, $title, $content, $author) {
        $this->articleId = $articleId;
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    public function getArticleId() {
        return $this->articleId;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getAuthor() {
        return $this->author;
    }
}

?>
