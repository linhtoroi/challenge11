<?php
class File
{
  public $filename='hihi.txt';
  public $content; 
  function __destruct(){
    file_put_contents($this->filename, $this->content);
  }
}
?>