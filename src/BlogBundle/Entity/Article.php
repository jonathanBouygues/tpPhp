<?php

class Article {
  private $_id;
  private $_title;
  private $_category;
  private $_createdAt;
  private $_modifiedAt;
  private $_content;

  public function __construct(
    string $id,
    string $title,
    string $category,
    string $content
  ) {
    $this->_id = $id;
    $this->_title = $title;
    $this->_category = $category;
    $this->_createdAt = date('d/m/Y');
    $this->_modifiedAt = null;
    $this->_content = $content;
  }

  public function getID(): string {return $this->_id;}
  public function getTitle(): string { return $this->_title; }
  public function getCategory(): string { return $this->_category; }
  public function getCreatedAt(): string { return $this->_createdAt; }
  public function getModifiedAt(): string { return $this->_modifiedAt; }
  public function getContent(): string { return $this->_content; }

  public function setTitle(string $title): void { $this->_title = $title; }
  public function setCategory(string $category): void { $this->_category = $category; }
  public function setModifiedAt(string $modifiedAt): void { $this->_modifiedAt = $modifiedAt; }
  public function setContent(string $content): void { $this->_content = $content; }
}
