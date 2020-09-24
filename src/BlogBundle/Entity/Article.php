<?php

class Article {
  private $_title;
  private $_author;
  private $_category;
  private $_createdAt;
  private $_modifiedAt;
  private $_content;

  public function __construct(
    string $title,
    string $author,
    string $category,
    string $content
  ) {
    $this->_title = $title;
    $this->_author = $author;
    $this->_category = $category;
    $this->_createdAt = date('d/m/Y');
    $this->_modifiedAt = null;
    $this->_content = $content;
  }

  public function getTitle(): string { return $this->_title; }
  public function getAuthor(): string { return $this->_author; }
  public function getCategory(): string { return $this->_category; }
  public function getCreatedAt(): string { return $this->_createdAt; }
  public function getModifiedAt(): string { return $this->_modifiedAt; }
  public function getContent(): string { return $this->_content; }

  public function setTitle(string $title): void { $this->_title = $title; }
  public function setAuthor(string $author): void { $this->_author = $author; }
  public function setCategory(string $category): void { $this->_category = $category; }
  public function setModifiedAt(string $modifiedAt): void { $this->_modifiedAt = $modifiedAt; }
  public function setContent(string $content): void { $this->_content = $content; }
}
